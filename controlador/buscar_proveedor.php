<?php
require_once ('conexion_bd.php');

$conexion = dbConnect();
$query_pro = "SELECT * FROM Proveedores";
$result_pro = $conexion->query($query_pro);



?>
