<?php session_start();
if (isset($_SESSION['usuario'])) {
  require ('vista/errores.view.php');
}
else {
  header('Location: index.php');
}

 ?>
