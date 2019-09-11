<?php session_start();
if (isset($_SESSION['usuario']) AND $_SESSION['usuario'] == 'admin') {

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $altauser = filter_var (strtoupper($_POST['altausuario']), FILTER_SANITIZE_STRING);
    $altapass = filter_var (strtoupper($_POST['altapassword']), FILTER_SANITIZE_STRING);
$error = "";
require_once ('controlador/conexion_bd.php');
$conexion = dbConnect();
$result = $conexion->prepare('SELECT * FROM UsuarioSistema WHERE Usuario = :altausuario LIMIT 1');
$result->execute(array(':altausuario' => $altauser));
$rows = $result->fetch();

if ($rows == true) {
   $error .= "<li> El Usuario ya existe</li>";
}

if ($error == ""){
   $result = $conexion->prepare('INSERT INTO UsuarioSistema ( Usuario, Password) VALUES (:altausuario, :altapassword)');
   $result->execute(array(
      ':altausuario' => $altauser,
      ':altapassword' => $altapass ));




   }
}
require ('vista/usuarios_sistema.view.php');
}
else {
	header('Location: index.php');
}

 ?>
