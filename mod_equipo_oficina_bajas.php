<?php session_start();
if (isset($_SESSION['usuario'])) {

require ('controlador/conexion_bd.php');
$conexion = dbConnect();
$id= $_POST['id_eo'];
$conexion = dbConnect();
$result = $conexion->prepare("SELECT * FROM EquipoOficina WHERE id_sistema ='$id' LIMIT 1");
$result->execute(array($id));
$rows = $result->fetch();
if ($rows == false){
  $error .= "Este registro no se encuentra o no existe";

}
require ('vista/mod_equipo_oficina_bajas.view.php');
}
else {
	header('Location: index.php');
}


 ?>
