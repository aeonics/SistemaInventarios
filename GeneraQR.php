<?php session_start();
if (isset($_SESSION['usuario'])) {

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $identificador_EC = $_POST['identificador_ec'];
  $identificador_EO = $_POST['identificador_eo'];
  $id_ec = $_POST['ID_QR_EC'];
  $id_eo = $_POST['ID_QR_EO'];
$Aviso= '';
$tempDir = "temp/";
include('phpqrcode/qrlib.php');
require ('controlador/conexion_bd.php');
$conexion = dbConnect();
if (isset($identificador_EC) AND isset($id_ec)) {
  $result = $conexion->prepare('SELECT *  FROM Equipo_Computo inner JOIN Ubicacion ON Ubicacion_idUbicacion = id inner JOIN Proveedores ON Proveedores_idProveedores = idProveedores INNER JOIN Empleado ON Empleado_idEmpelado = idEmpleado WHERE Equipo_Computo.id_sistema = :ID_QR_EC LIMIT 1');
  $result->execute(array(':ID_QR_EC' => $id_ec));
   $rows = $result->fetch();
   if ($rows !=true) {
     $Aviso .= "<li>No existe este registro y no puedo generar el codigo QR</li>";
   }else {
    $codeContenido  = 'Inventario Equipo de Computo'."\n";
    $codeContenido .= '°'.$rows['Identificador']."-".$rows['id_sistema']."\n";
    $codeContenido .= 'Fecha de compra:'.$rows['FechaCompra']."\n";
    $codeContenido .= 'Area: '.$rows['Area']."\n";
    $codeContenido .= 'Asignado a: '.$rows['Nombre']." ". $rows['Apellido_Pat']."\n";
    $codeContenido .= 'Puesto: '.$rows['Actividad'];
     QRcode::png($codeContenido, $tempDir.'EQ_Computo.png', QR_ECLEVEL_Q);
     $Aviso= '<img src="'.$tempDir.'EQ_Computo.png" />';
   }
}
if (isset($identificador_EO) AND isset($id_eo)) {
  $result = $conexion->prepare('SELECT *  FROM EquipoOficina inner JOIN Ubicacion ON Ubicacion_idUbicacion = id inner JOIN Proveedores ON Proveedores_idProveedores = idProveedores INNER JOIN Empleado ON Empleado_idEmpelado = idEmpleado WHERE EquipoOficina.id_sistema = :ID_QR_EO LIMIT 1');
  $result->execute(array(':ID_QR_EO' => $id_eo));
   $rows = $result->fetch();
   if ($rows !=true) {
     $Aviso .= "<li>No existe este registro y no puedo generar el codigo QR</li>";
   }else {
     $codeContenido  = 'Inventario Equipo de Oficina'."\n";
     $codeContenido .= '°'.$rows['Identificador']."-".$rows['id_sistema']."\n";
     $codeContenido .= 'Fecha de compra:'.$rows['FechaCompra']."\n";
     $codeContenido .= 'Area: '.$rows['Area']."\n";
     $codeContenido .= 'Asignado a: '.$rows['Nombre']." ". $rows['Apellido_Pat']."\n";
     $codeContenido .= 'Puesto: '.$rows['Actividad'];
      QRcode::png($codeContenido, $tempDir.'EQ_Oficina.png', QR_ECLEVEL_Q);
      $Aviso= '<img src="'.$tempDir.'EQ_Oficina.png" />';
   }
}
}
require ('vista/GeneraQR.view.php');
}
else {
	header('Location: index.php');
}


 ?>
