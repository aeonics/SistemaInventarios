<?php session_start();
if (isset($_SESSION['usuario'])) {

require ('controlador/conexion_bd.php');
$conexion = dbConnect();
$query = "SELECT * FROM Equipo_Computo INNER JOIN Ubicacion ON Ubicacion_idUbicacion = id INNER JOIN Proveedores ON Proveedores_idProveedores = idProveedores INNER join Empleado ON Empleado_idEmpelado = idEmpleado ORDER BY idComputo ASC";
$result = $conexion->query($query);
require ('vista/consulta_ecomputo.view.php');
}
else {
	header('Location: index.php');
}


?>
