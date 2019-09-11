<?php
require_once ('conexion_bd.php');

$conexion = dbConnect();
$query_empleado = "SELECT * FROM Empleado";
$result_emp = $conexion->query($query_empleado);



?>
