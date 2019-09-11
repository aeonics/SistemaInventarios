<?php session_start();
if (isset($_SESSION['usuario'])) {

require_once ('controlador/conexion_bd.php');
$conexion = dbConnect();
$query = "SELECT * FROM Proveedores";
$result = $conexion->query($query);

require ('vista/consulta_proveedores.view.php');
}
else {
	header('Location: index.php');
}

 ?>
