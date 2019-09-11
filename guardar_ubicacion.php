<?php

    $idu = $_POST['id_ubicacion'];
    $area = filter_var (strtoupper($_POST['area']), FILTER_SANITIZE_STRING);
    $ubicacion = filter_var (strtoupper($_POST['ubicacion']), FILTER_SANITIZE_STRING);


 $error = '';

   if ($error==''){
  require_once ('controlador/conexion_bd.php');
  $conexion = dbConnect();
  $query="UPDATE Ubicacion SET Area ='$area',Ubicacion ='$ubicacion' WHERE sistema_ID ='$idu'";
  $result = $conexion->query($query);
  $error .= "Se actualizo el registro";
  header("Location: editar_ubicaciones.php");

}
 ?>
