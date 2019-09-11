<?php session_start();
if (isset($_SESSION['usuario'])) {

require_once ('controlador/conexion_bd.php');
$conexion = dbConnect();
$id= $_POST['id_proveedores'];
$conexion = dbConnect();
$result = $conexion->prepare("SELECT * FROM Proveedores WHERE sistema_ID ='$id' LIMIT 1");
$result->execute(array($id));
$rows = $result->fetch();
if ($rows == false){
  $error .= "Este registro no se encuentra o no existe";

}
require ('vista/eliminar_proveedores.view.php');
}
else {
	header('Location: index.php');
}

 ?>
