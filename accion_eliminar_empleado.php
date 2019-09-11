<?php

    $id_empleado = $_POST['ida'];
    


  require_once ('controlador/conexion_bd.php');
  $conexion = dbConnect();
  $query="DELETE FROM Empleado WHERE ID_sistema ='$id_empleado'";
  $result = $conexion->query($query);

   header("Location: alta_usuarios.php");



 ?>
