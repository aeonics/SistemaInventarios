<?php

    $idu = $_POST['id_ubicacion'];

 $error = '';

  if ($error==''){
  require_once ('controlador/conexion_bd.php');
  $conexion = dbConnect();
  $query="DELETE FROM Ubicacion WHERE sistema_ID ='$idu'";
  $result = $conexion->query($query);
  $error .= "Se actualizo el registro";
  header("Location: eliminar_ubicaciones.php");

}

 ?>
