<?php session_start();
if (isset($_SESSION['usuario'])) {


require_once ('controlador/conexion_bd.php');
$conexion = dbConnect();
$query = "SELECT * FROM EquipoOficina INNER JOIN Ubicacion ON Ubicacion_idUbicacion = id INNER JOIN Proveedores ON Proveedores_idProveedores = idProveedores INNER join Empleado ON Empleado_idEmpelado = idEmpleado ORDER BY idOficina ASC";
$result = $conexion->query($query);

require ('vista/consulta_eoficina.view.php');
}
else {
	header('Location: index.php');
}

 ?>
