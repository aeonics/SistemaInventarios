<?php

    $id = $_POST['ida'];
    $nombre1 = filter_var (strtoupper($_POST['nombre1']), FILTER_SANITIZE_STRING);
    $nombre2 = filter_var (strtoupper($_POST['nombre2']), FILTER_SANITIZE_STRING);
    $apellido1 = filter_var (strtoupper($_POST['apellido1']), FILTER_SANITIZE_STRING);
    $apellido2 = filter_var (strtoupper($_POST['apellido2']), FILTER_SANITIZE_STRING);
    $actividad = filter_var (strtoupper($_POST['actividad']), FILTER_SANITIZE_STRING);

//     // Recibo los datos de la imagen
     $nombre_img = $_FILES['imagen']['name'];
     $tipo = $_FILES['imagen']['type'];
     $tamano = $_FILES['imagen']['size'];

 $error = '';


// // ACCIONES DE imagen
 if (($nombre_img == !NULL) && ($_FILES['imagen']['size'] <= 200000))
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
        $error .= "No se puede subir una imagen con ese formato ";
     }

 }
 elseif($nombre_img == !NULL)
 {
    $error .= "La imagen es demasiado grande ";
  }
  if ($error==''){
  require_once ('controlador/conexion_bd.php');
  $conexion = dbConnect();
  $query="UPDATE Empleado SET Nombre ='$nombre1',Nombre2 ='$nombre2', Apellido_Pat ='$apellido1', Apellido_Mat ='$apellido2', Actividad ='$actividad', RutaImagenEmpleado ='$nombre_img' WHERE ID_sistema ='$id'";
  $result = $conexion->query($query);
  $error .= "Se actualizo el registro";
  header("Location: alta_usuarios.php");

}
 ?>
