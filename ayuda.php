<?php session_start();
if (isset($_SESSION['usuario'])) {
require 'vista/ayuda.view.php';
}
else {
	header('Location: index.php');
}
?>
