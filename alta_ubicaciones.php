<?php session_start();
if (isset($_SESSION['usuario'])) {

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $idu = $_POST['id_ubicacion'];
    $area = filter_var (strtoupper($_POST['area']), FILTER_SANITIZE_STRING);
    $ubicacion = filter_var (strtoupper($_POST['ubicacion']), FILTER_SANITIZE_STRING);


$error = '';
require_once ('controlador/conexion_bd.php');
$conexion = dbConnect();
$result = $conexion->prepare('SELECT * FROM Ubicacion WHERE sistema_ID = :id_ubicacion LIMIT 1');
$result->execute(array(':id_ubicacion' => $idu));
$rows = $result->fetch();

if ($rows != false) {
   $error .= '<li> El ID que intentas grabar ya existe</li>';
}
if ($rows == false){

    $result1 = $conexion->prepare('INSERT INTO Ubicacion (sistema_ID, Area, Ubicacion) VALUES (:id_ubicacion, :area, :ubicacion)') or die(mysql_error($result1));
     $result1->execute(array(
       ':id_ubicacion'=>$idu,
       ':area'=>$area,
       ':ubicacion'=>$ubicacion ));


    $error .= "Datos guardados exitosamente el ID =";
   }
}

require ('vista/alta_ubicaciones.view.php');
}
else {
	header('Location: index.php');
}


 ?>
