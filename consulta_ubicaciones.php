<?php session_start();
if (isset($_SESSION['usuario'])) {
require ('controlador/conexion_bd.php');
$conexion = dbConnect();
$query = "SELECT * FROM Ubicacion";
$result = $conexion->query($query);

require ('vista/consulta_ubicacion.view.php');
}
else {
	header('Location: index.php');
}

 ?>
