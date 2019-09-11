<?php session_start();
if (isset($_SESSION['usuario'])) {

require ('controlador/conexion_bd.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $idpro = $_POST['id_altapro'];
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
    $telefono1 = filter_var ($_POST['telefono1'], FILTER_SANITIZE_STRING);
    $telefono2 = filter_var ($_POST['telefono2'], FILTER_SANITIZE_STRING);
    $email1 = filter_var (strtoupper($_POST['email1']), FILTER_SANITIZE_STRING);
    $email2 = filter_var (strtoupper($_POST['email2']), FILTER_SANITIZE_STRING);
    $bancarios = filter_var (strtoupper($_POST['bancarios']), FILTER_SANITIZE_STRING);

$error = '';

$conexion = dbConnect();
$result = $conexion->prepare('SELECT * FROM Proveedores WHERE sistema_ID = :id_altapro LIMIT 1');
$result->execute(array(':id_altapro' => $idpro));
$rows = $result->fetch();

if ($rows != false) {
   $error .= '<li> El ID que intentas grabar ya existe</li>';
}
if ($rows == false){

    $result1 = $conexion->prepare('INSERT INTO Proveedores (
      sistema_ID,
      NombreComercial,
      NombreFiscal,
      Calle,
      NumeroExt,
      Delegacion,
      Estado,
      NumeroInt,
      RFC,
      Contacto1,
      Contacto2,
      Telefono1,
      Telefono2,
      Email1,
      Email2,
      DatosBancarios
    ) VALUES
      (:id_altapro, :ncomercial, :nombrefiscal, :calle, :nexterior, :delegacion, :estado, :ninterior, :rfc, :contacto1, :contacto2, :telefono1, :telefono2, :email1, :email2, :bancarios)') or die(mysql_error($result1));
     $result1->execute(array(
       ':id_altapro'=>$idpro,
       ':ncomercial'=>$ncomercial,
       ':nombrefiscal'=>$nombrefiscal,
       ':calle'=>$calle,
       ':nexterior'=>$nexterior,
       ':delegacion'=>$delegacion,
       ':estado'=>$estado,
       ':ninterior'=>$ninterior,
       ':rfc'=>$rfc,
       ':contacto1'=>$contacto1,
       ':contacto2'=>$contacto2,
       ':telefono1'=>$telefono1,
       ':telefono2'=>$telefono2,
       ':email1'=>$email1,
       ':email2'=>$email2,
       ':bancarios'=>$bancarios

                            ));

   }
}
require ('vista/alta_proveedores.view.php');
}
else {
	header('Location: index.php');
}

 ?>
