<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>UBICACIONES</title>
		<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="imagen/favicon.ico">
<link rel="stylesheet" href="css/base.css" charset="utf-8">
<link rel="stylesheet" href="css/base2.css">
	</head>
	<body>
		<!-- SE MANDA A LLAMAR AL MENU -->
		<?php
		require ('menu.view.php')
		 ?>
		 <!-- SE TERMINA DE LLAMAR AL MENU -->
		<!-- AQUI VA EL CONTENIDO -->
		<div id="CONTENIDO">
			<div>
				<div id="TITULOXMODULO">
						<img src="imagen/iconos/ubicacion.ico" width="48px" />
						<h1>MODULO DE USUARIOS</h1>
				</div>
			<hr>
			<!-- SE LLAMA AL MENU DE ACCIONES DE LOS USUARIOS -->
			<?php require ('menu_acciones_ubicaciones.view.php'); ?>
			<!-- SE TERMINA DE LLAMAR A MENU ACCIONES DE LOS USARIOS -->
			<div><br><br><br>
				<hr>
				<center>
				<table> <!-- Lo cambiaremos por CSS -->
			             <caption><h2>Listado de Ubicaciones</h2></caption>
			             <tr>
			                 <th scope="row">ID</th>
			                 <th>Area</th>
			                 <th>Ubicación</th>


			             </tr>
									 <?php while($row = $result->fetch()){
					 				?>
			             <tr>
			                 <td><?php echo $row['sistema_ID']; ?></td>
			                 <td><?php echo $row['Area']; ?></td>
			                 <td><?php echo $row['Ubicacion']; ?></td>

			             </tr>
									 <?php } ?>
			         </table>
						 </center>
			</div>
			</div>
		</div>
		<!-- TERMINA EL CONTENIDO -->
	</body>
</html>
