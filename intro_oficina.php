<?php session_start();
if (isset($_SESSION['usuario'])) {
require ('vista/intro_oficina.view.php');
}
else {
	header('Location: index.php');
}

 ?>
