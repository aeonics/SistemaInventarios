<?php

    $id_ec_baja = $_POST['id_ec'];

 $error = '';

  if ($error==''){
  require_once ('controlador/conexion_bd.php');
  $conexion = dbConnect();
  $query="DELETE FROM Equipo_Computo WHERE id_sistema ='$id_ec_baja'";
  $result = $conexion->query($query);
  
  header("Location: mod_equipo_computo.php");

}

 ?>
