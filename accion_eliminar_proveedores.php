<?php

    $id = $_POST['id_proveedores'];

 $error = '';

  if ($error==''){
  require_once ('controlador/conexion_bd.php');
  $conexion = dbConnect();
  $query="DELETE FROM Proveedores WHERE sistema_ID ='$id'";
  $result = $conexion->query($query);
  $error .= "Se actualizo el registro";
  header("Location: alta_proveedores.php");

}

 ?>
