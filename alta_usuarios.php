<?php session_start();
if (isset($_SESSION['usuario'])) {

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $nombre1 = filter_var (strtoupper($_POST['nombre1']), FILTER_SANITIZE_STRING);
    $nombre2 = filter_var (strtoupper($_POST['nombre2']), FILTER_SANITIZE_STRING);
    $apellido1 = filter_var (strtoupper($_POST['apellido1']), FILTER_SANITIZE_STRING);
    $apellido2 = filter_var (strtoupper($_POST['apellido2']), FILTER_SANITIZE_STRING);
    $actividad = filter_var (strtoupper($_POST['actividad']), FILTER_SANITIZE_STRING);
    // Recibo los datos de la imagen
    $nombre_img = $_FILES['imagen']['name'];
    $tipo = $_FILES['imagen']['type'];
    $tamano = $_FILES['imagen']['size'];

$error = '';
require_once ('controlador/conexion_bd.php');
$conexion = dbConnect();
$result = $conexion->prepare('SELECT * FROM Empleado WHERE ID_sistema = :id LIMIT 1');
$result->execute(array(':id' => $id));
$rows = $result->fetch();

if ($rows != false) {
   $error .= '<li> El ID que intentas grabar ya existe</li>';
}
// ACCIONES DE imagen
if (($nombre_img == !NULL) && ($_FILES['imagen']['size'] <= 500000))
{
   //indicamos los formatos que permitimos subir a nuestro servidor
   if (($_FILES["imagen"]["type"] == "image/gif")
   || ($_FILES["imagen"]["type"] == "image/jpeg")
   || ($_FILES["imagen"]["type"] == "image/jpg"))
   {
      // Ruta donde se guardarán las imágenes que subamos
      $directorio = 'archivos/fotos/usuarios/';
      // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
      $fecha=new DateTime();
      move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$fecha->format('YmdHis'). $nombre_img);
      //Se guarda el nombre del archivo en la variable
      $nombre_img = $directorio.$fecha->format('YmdHis').$nombre_img;
    }
    else
    {
       //si no cumple con el formato
       $error .= "No se puede subir una imagen con ese formato solo archivos JPG";
    }
}
elseif($nombre_img == !NULL)
{
   $error .= "La imagen es demasiado grande ";
   }


//FIN DE IMAGEN
if ($error == ''){
   $result = $conexion->prepare('INSERT INTO Empleado (ID_sistema, Nombre, Nombre2, Apellido_Pat, Apellido_Mat, Actividad, RutaImagenEmpleado) VALUES (:id, :nombre1, :nombre2, :apellido1, :apellido2, :actividad, :imagen)');
   $result->execute(array(
      ':id' => $id,
      ':nombre1' => $nombre1,
      ':nombre2' => $nombre2,
      ':apellido1' => $apellido1,
      ':apellido2' => $apellido2,
      ':actividad' => $actividad,
      ':imagen' => $nombre_img));

    $error .= "Datos guardados exitosamente";


   }
}
require ('vista/alta_usuarios.view.php');
}
else {
	header('Location: index.php');
}

 ?>
