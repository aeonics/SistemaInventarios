<?php session_start();
if (isset($_SESSION['usuario'])) {
	header('Location: bienvenida.php');
}

$errores = '';
require ('controlador/conexion_bd.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
  $conexion = dbConnect();
	$statement = $conexion->prepare('SELECT * FROM UsuarioSistema WHERE Usuario = :usuario AND Password= :password');
	$statement->execute(array(
		':usuario' => $usuario,
		':password' => $password
	));

	$resultado = $statement->fetch();
	if ($resultado !== false) {
		$_SESSION['usuario'] = $usuario;
		header('Location: index.php');
    echo "string";
	} else {
		$errores .= '<li>Datos Incorrectos</li>';
	}
}



include ('vista/login.view.php');
 ?>
