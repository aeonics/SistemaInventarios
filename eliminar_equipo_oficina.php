<?php

    $id_eo_baja = $_POST['id_eo'];

 $error = '';

  if ($error==''){
  require_once ('controlador/conexion_bd.php');
  $conexion = dbConnect();
  $query="DELETE FROM EquipoOficina WHERE id_sistema ='$id_eo_baja'";
  $result = $conexion->query($query);

  header("Location: mod_equipo_oficina.php");

}

 ?>
