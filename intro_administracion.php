<?php session_start();
if (isset($_SESSION['usuario'])) {
  require ('vista/intro_administracion.view.php');
}
else {
  header('Location: index.php');
}

 ?>
