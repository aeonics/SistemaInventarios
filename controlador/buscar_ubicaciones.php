<?php
require ('conexion_bd.php');
$conexion = dbConnect();
$query_ubicacion = "SELECT * FROM Ubicacion";
$result_u = $conexion->query($query_ubicacion);

?>
