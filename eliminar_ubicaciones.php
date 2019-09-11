<?php session_start();
if (isset($_SESSION['usuario'])) {

require ('controlador/conexion_bd.php');
$conexion = dbConnect();
$idu= $_POST['id_ubicacion'];
$conexion = dbConnect();

$result = $conexion->prepare("SELECT * FROM Ubicacion WHERE sistema_ID ='$idu' LIMIT 1");
$result->execute(array($idu));
$rows = $result->fetch();
if ($rows == false){
  $error .= "Este registro no se encuentra o no existe";

}

require ('vista/eliminar_ubicaciones.view.php');
}
else {
	header('Location: index.php');
}

 ?>
