<?php session_start();

 $bususer = filter_var (strtoupper($_POST['bususuario']), FILTER_SANITIZE_STRING);
 $newpass = filter_var (strtoupper($_POST['newpassword']), FILTER_SANITIZE_STRING);
echo $bususer;


$error = "";
require_once ('controlador/conexion_bd.php');
$conexion = dbConnect();
if ($error == ""){
$query = "UPDATE UsuarioSistema SET Password ='$newpass' WHERE Usuario = '$bususer' ";
$result = $conexion->query($query);
$error .= "Se actualizo el registro";
header("Location: usuarios_sistema.php");

}


 ?>
