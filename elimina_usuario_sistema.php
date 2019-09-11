<?php session_start();

 $id_eliminar = filter_var ($_POST['eliminausuario'], FILTER_SANITIZE_STRING);


require_once ('controlador/conexion_bd.php');
$conexion = dbConnect();
if ($id_eliminar <> 1){
  $query="DELETE FROM UsuarioSistema WHERE idUsuarios ='$id_eliminar'";
  $result = $conexion->query($query);

  header("Location: usuarios_sistema.php");
}
header("Location: usuarios_sistema.php");

 ?>
