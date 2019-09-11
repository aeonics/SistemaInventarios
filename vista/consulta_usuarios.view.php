<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>USUARIOS</title>
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
						<img src="imagen/iconos/cliente.jpg" width="48px" />
						<h1>MODULO DE USUARIOS</h1>
				</div>
			<hr>
			<!-- SE LLAMA AL MENU DE ACCIONES DE LOS USUARIOS -->
			<?php require ('menu_acciones_usuarios.view.php'); ?>
			<!-- SE TERMINA DE LLAMAR A MENU ACCIONES DE LOS USARIOS -->
			<div><br><br><br>
				<hr>
				<center>
				<table> <!-- Lo cambiaremos por CSS -->
			             <caption><h2>Listado de Usuarios</h2></caption>
			             <tr>
			                 <th scope="row">ID</th>
			                 <th>Primer Nombre</th>
			                 <th>Segundo Nombre</th>
											 <th>Apellido Paterno</th>
											 <th>Apellido Materno</th>
											 <th>Puesto</th>
											 <th>Imagen</th>

			             </tr>
									 <?php while($row = $result->fetch()){
					 				?>
			             <tr>
			                 <td><?php echo $row['ID_sistema']; ?></td>
			                 <td><?php echo $row['Nombre']; ?></td>
			                 <td><?php echo $row['Nombre2']; ?></td>
											 <td><?php echo $row['Apellido_Pat']; ?></td>
											 <td><?php echo $row['Apellido_Mat']; ?></td>
											 <td><?php echo $row['Actividad']; ?></td>
											 <td><center> <img src="<?php echo $row['RutaImagenEmpleado']; ?>" alt="Imagen de Archivo" width="10%" height="10%" /></center> </td>
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
