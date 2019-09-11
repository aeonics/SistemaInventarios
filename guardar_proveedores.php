<?php
$error = '';
$id = $_POST['id_proveedores'];
$ncomercial = filter_var (strtoupper($_POST['ncomercial']), FILTER_SANITIZE_STRING);
$nombrefiscal = filter_var (strtoupper($_POST['nombrefiscal']), FILTER_SANITIZE_STRING);
$calle = filter_var (strtoupper($_POST['calle']), FILTER_SANITIZE_STRING);
$nexterior = filter_var (strtoupper($_POST['nexterior']), FILTER_SANITIZE_STRING);
$delegacion = filter_var (strtoupper($_POST['delegacion']), FILTER_SANITIZE_STRING);
$estado = filter_var (strtoupper($_POST['estado']), FILTER_SANITIZE_STRING);
$ninterior = filter_var (strtoupper($_POST['ninterior']), FILTER_SANITIZE_STRING);
$rfc = filter_var (strtoupper($_POST['rfc']), FILTER_SANITIZE_STRING);
$contacto1 = filter_var (strtoupper($_POST['contacto1']), FILTER_SANITIZE_STRING);
$contacto2 = filter_var (strtoupper($_POST['contacto2']), FILTER_SANITIZE_STRING);
$telefono1 = filter_var (strtoupper($_POST['telefono1']), FILTER_SANITIZE_STRING);
$telefono2 = filter_var (strtoupper($_POST['telefono2']), FILTER_SANITIZE_STRING);
$email1 = filter_var (strtoupper($_POST['email1']), FILTER_SANITIZE_STRING);
$email2 = strtoupper($_POST['email2']);
$bancarios = filter_var (strtoupper($_POST['bancarios']), FILTER_SANITIZE_STRING);

  if ($error==''){
  require_once ('controlador/conexion_bd.php');
  $conexion = dbConnect();
  $query="UPDATE Proveedores SET NombreComercial ='$ncomercial', NombreFiscal ='$nombrefiscal', Calle ='$calle', NumeroExt ='$nexterior', Delegacion ='$delegacion', Estado ='$estado', NumeroInt ='$ninterior', RFC='$rfc', Contacto1 ='$contacto1', Contacto2 ='$contacto2', Telefono1 ='$telefono1', Telefono2='$telefono2', Email1='$email1', Email2='$email2', DatosBancarios='$bancarios' WHERE sistema_ID ='$id'";
  $result = $conexion->query($query);
  $error .= "Se actualizo el registro";
  header('Location: editar_proveedores.php');

}

 ?>
