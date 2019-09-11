<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PROVEEDORES</title>
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
						<img src="imagen/iconos/proveedores.png" width="48px" />
						<h1>MODULO DE PROVEEDORES</h1>
				</div>
			<hr>
			<!-- SE LLAMA AL MENU DE ACCIONES DE LOS USUARIOS -->
			<?php require ('menu_acciones_proveedores.view.php'); ?>
			<!-- SE TERMINA DE LLAMAR A MENU ACCIONES DE LOS USARIOS -->
			<div><br><br><br>
				<hr>
				<center>
				<table> <!-- Lo cambiaremos por CSS -->
			             <caption><h2>Listado de Proveedores</h2></caption>
			             <tr>
			                 <th scope="row">ID</th>
			                 <th>Nombre Comercial</th>
			                 <th>Nombre Fiscal</th>
											 <th>Calle</th>
											 <th>Numero Exterior</th>
											 <th>Delegacion</th>
											 <th>Estado</th>
											 <th>Numero Interior</th>
											 <th>RFC</th>
											 <th>Contacto 1</th>
											 <th>Contacto 2</th>
											 <th>Telefono 1</th>
											 <th>Telefono 2</th>
											 <th>Email 1</th>
											 <th>Email 2</th>
											 <th>Datos Bancarios</th>

			             </tr>
									 <?php while($row = $result->fetch()){
					 				?>
			             <tr>
			                 <td><?php echo $row['sistema_ID']; ?></td>
			                 <td><?php echo $row['NombreComercial']; ?></td>
			                 <td><?php echo $row['NombreFiscal']; ?></td>
											 <td><?php echo $row['Calle']; ?></td>
											 <td><?php echo $row['NumeroExt']; ?></td>
											 <td><?php echo $row['Delegacion']; ?></td>
											 <td><?php echo $row['Estado']; ?></td>
											 <td><?php echo $row['NumeroInt']; ?></td>
											 <td><?php echo $row['RFC']; ?></td>
											 <td><?php echo $row['Contacto1']; ?></td>
											 <td><?php echo $row['Contacto2']; ?></td>
											 <td><?php echo $row['Telefono1']; ?></td>
											 <td><?php echo $row['Telefono2']; ?></td>
											 <td><?php echo $row['Email1']; ?></td>
											 <td><?php echo $row['Email2']; ?></td>
											 <td><?php echo $row['DatosBancarios']; ?></td>
			             </tr>

									 <?php } ?>
			         </table>
						 </center>
			</div>

			</div>
		</div>
		<br><br>
		<!-- TERMINA EL CONTENIDO -->
	</body>
</html>
