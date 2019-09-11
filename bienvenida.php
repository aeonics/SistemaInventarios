<?php session_start();
if (isset($_SESSION['usuario'])) {
	require ('vista/bienvenida.view.php');
}
else {
	header('Location: index.php');
}


 ?>
