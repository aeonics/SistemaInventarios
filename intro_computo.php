<?php session_start();
if (isset($_SESSION['usuario'])) {
require ('vista/intro_computo.view.php');
}
else {
	header('Location: index.php');
}

 ?>
