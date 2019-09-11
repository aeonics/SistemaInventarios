<?php session_start();
if (isset($_SESSION['usuario'])) {

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
//////////************************////
//Variables
$id_ec =$_POST['id_ec'];
$identificador = filter_var (strtoupper($_POST['identificador']), FILTER_SANITIZE_STRING);
$marca = filter_var (strtoupper($_POST['marca']), FILTER_SANITIZE_STRING);
$modelo = filter_var (strtoupper($_POST['modelo']), FILTER_SANITIZE_STRING);
$serie = filter_var (strtoupper($_POST['serie']), FILTER_SANITIZE_STRING);
$parte = filter_var (strtoupper($_POST['parte']), FILTER_SANITIZE_STRING);
$ubicacion = $_POST['ubicacion'];
$responsable = $_POST['responsable'];
$proveedor = $_POST['proveedor'];
$estatus = filter_var (strtoupper($_POST['estatus']), FILTER_SANITIZE_STRING);
$descripcion = filter_var (strtoupper($_POST['descripcion']), FILTER_SANITIZE_STRING);
$costo = $_POST['costo'];
$iva = $_POST['iva'];
$fechacompra = $_POST['fechacompra'];

// Recibo los datos de la imagen
$nombre_img = $_FILES['rutaimagen']['name'];
$tipo = $_FILES['rutaimagen']['type'];
$tamano = $_FILES['rutaimagen']['size'];

//////////*****************************

$error="";
require ('controlador/conexion_bd.php');
$conexion = dbConnect();
$result_ec = $conexion->prepare('SELECT * FROM Equipo_Computo WHERE id_sistema = :id_ec LIMIT 1');
$result_ec->execute(array(':id_ec' => $id_ec));
$rows_ec = $result_ec->fetch();
if ($rows_ec != false) {
   $error .= '<li> El ID que intentas grabar ya existe</li>';

}
///////*****************************///////////////
///////////////*******************imagen
if (($nombre_img == !NULL) && ($_FILES['rutaimagen']['size'] <= 500000))
{
   //indicamos los formatos que permitimos subir a nuestro servidor
   if (($_FILES["rutaimagen"]["type"] == "image/gif")
   || ($_FILES["rutaimagen"]["type"] == "image/jpeg")
   || ($_FILES["rutaimagen"]["type"] == "image/jpg"))
   {
      // Ruta donde se guardarán las imágenes que subamos
      $directorio = 'archivos/fotos/ecomputo/';
      // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
      $fecha=new DateTime();
      move_uploaded_file($_FILES['rutaimagen']['tmp_name'],$directorio.$fecha->format('YmdHis'). $nombre_img);
      //Se guarda el nombre del archivo en la variable
      $nombre_img = $directorio.$fecha->format('YmdHis').$nombre_img;
    }
    else
    {
       //si no cumple con el formato
       $error .= "No se puede subir una imagen con ese formato ";
    }
}
elseif($nombre_img == !NULL)
{
   $error .= "La imagen es demasiado grande ";
   }

///////////////*********************************
//////////////////PDF *********************
if(isset($_FILES['pdf'])){
    $pdf_name = $_FILES['pdf']['name'];
    $pdf_size =$_FILES['pdf']['size'];
    $pdf_tmp =$_FILES['pdf']['tmp_name'];
    $pdf_type=$_FILES['pdf']['type'];
$dirpdf = "archivos/pdf/equipocomputo/";
    $pdf = $dirpdf . $pdf_name;

    mkdir($dirpdf, 0777); //crea el directorio con permisos 777
    chmod($dirpdf, 0777); // confirma que los permisos de la carpeta sea 777
    $fecha=new DateTime();
    move_uploaded_file($_FILES['pdf']['tmp_name'], $dirpdf.$pdf_name); //mueve el archivo de la ubicacion temporal al directorio con el nombre que quieres que tenga el pdf
    $pdf_name = $dirpdf.$fecha->format('YmdHis').$pdf_name;
    //////////////////////////****************

if ($pdf_size >= 4000000) {
  $error .= "<li>El archivo que intentas subir es muy grande</li>";
}

    }
/////////////// X M L
if(isset($_FILES['filexml'])){
    $xml_name = $_FILES['filexml']['name'];
    $xml_size =$_FILES['filexml']['size'];
    $xml_tmp =$_FILES['file_xml']['tmp_name'];
    $xml_type=$_FILES['file_xml']['type'];
$dirxml = "archivos/xml/equipocomputo/";
    $xml = $dirxml.$xml_name;

    }
mkdir($dirxml, 0777); //crea el directorio con permisos 777
chmod($dirxml, 0777); // confirma que los permisos de la carpeta sea 777

move_uploaded_file($_FILES['filexml']['tmp_name'], $dirxml.$xml_name); //mueve el archivo de la ubicacion temporal al directorio con el nombre que quieres que tenga el pdf
$xml_name = $dirxml.$xml_name;


//TERMINA VALIDACION DE XML
if ($error == ''){
$result_ec = $conexion->prepare('INSERT INTO Equipo_Computo (id_sistema, Ubicacion_idUbicacion, Proveedores_idProveedores, Empleado_idEmpelado, Identificador, Marca, Modelo, Serie, Estatus, Descripcion, Costo, IVA, FechaCompra, RutaImagen, Factura, XML, NoParte ) VALUES (:id_ec, :ubicacion, :proveedor, :responsable, :identificador, :marca, :modelo, :serie, :estatus, :descripcion, :costo, :iva, :fechacompra, :rutaimagen, :pdf, :filexml, :parte )') or die(mysql_error());
$result_ec->execute(array(
':id_ec' => $id_ec,
':ubicacion' => $ubicacion,
':proveedor' => $proveedor,
':responsable' => $responsable,
':identificador' => $identificador,
':marca' => $marca,
':modelo' => $modelo,
':serie' => $serie,
':estatus' => $estatus,
':descripcion' => $descripcion,
':costo' => $costo,
':iva' => $iva,
':fechacompra' => $fechacompra,
':rutaimagen' => $nombre_img,
':pdf' => $pdf,
':filexml' => $xml_name,
':parte' => $parte
));

////////////////****************
//************** SE CALCULA LOS AÑOS DEL EQUIPO A PARTIR DE LA FECHA DE COMPRA
$Aviso=""; ///////VAriable aviso para sacra codigo QR
$antiguedad =$fechacompra;
$dia=date("j");
$mes=date("n");
$anno=date("Y");
$dia_compra=substr($antiguedad, 8, 2);
$mes_compra=substr($antiguedad, 5, 2);
$anno_compra=substr($antiguedad, 0, 4);

if($mes_compra>$mes){
$calc_edad= $anno-$anno_compra-1;
}else{
if($mes==$mes_compra AND $dia_compra>$dia){
$calc_edad= $anno-$anno_compra-1;
}else{
$calc_edad= $anno-$anno_compra;
}
}
//////////////////SE calcula el valor actual
if ($calc_edad != 0) {
  for ($i=1; $i<=$calc_edad ; $i++) {
    $costo = $costo / 1.25;
    number_format($costo,2)."<br>";
  }
  $valoractual=$costo;
}else {
  $valoractual=$costo;
}
$valoractual= number_format($valoractual,2);
//////////////// se termina de calcular la antiguedad
//////////// SE ACTUALIZA SIEMPRE Y CUANDO NO HAYA ERRORES

  }
  if ($error=="") {
    $query="UPDATE Equipo_Computo SET Antiguedad ='$calc_edad', ValorActual='$valoractual' WHERE id_sistema ='$id_ec'";
    $result = $conexion->query($query);
    $Aviso="<li>Genera el Codigo QR en el menu principal </li>";
  }

}
require ('vista/equipo_computo.view.php');
}
else {
	header('Location: index.php');
}

 ?>
