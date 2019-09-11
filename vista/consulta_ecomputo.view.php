<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>COMPUTO</title>
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
						<img src="imagen/iconos/pc.png" width="48px" />
						<h1>CONSULTA EQUIPO DE COMPUTO</h1>
				</div>
			<hr>
			<!-- SE LLAMA AL MENU DE ACCIONES DE LOS USUARIOS -->
			<?php require ('menu_acciones_computo.view.php'); ?>
			<!-- SE TERMINA DE LLAMAR A MENU ACCIONES DE LOS USARIOS -->
			<div><br><br><br>
				<hr>
				<center>
				<table> <!-- Lo cambiaremos por CSS -->
			             <caption><h2>Listado de Equipo de Computo</h2></caption>
			             <tr>
			                 <th scope="row">ID</th>

			                 <th>Marca</th>
											 <th>Modelo</th>
											 <th>Serie</th>
											 <th>Descripcion</th>
											 <th>#Parte</th>
											 <th>Costo</th>
											 <th>IVA</th>
											 <th>Fecha/Compra</th>
											 <th>Valor Actual</th>
											 <th>Estatus</th>
											 <th>Años</th>
											 <th>Asignado</th>
											 <th>Ubicacion</th>
											 <th>Proveedor</th>
											 <th>Imagen</th>
											 <th>Factura</th>
											 <th>XML</th>


			             </tr>
									 <?php while($row = $result->fetch()){
					 				?>
			             <tr>
			                 <td><?php echo $row['id_sistema']; ?></td>

			                 <td><?php echo $row['Marca']; ?></td>
											 <td><?php echo $row['Modelo']; ?></td>
											 <td><?php echo $row['Serie']; ?></td>
											 <td><?php echo $row['Descripcion']; ?></td>
											 <td><?php echo $row['NoParte']; ?></td>
											 <td>$<?php echo $row['Costo']; ?></td>
											 <td>$<?php echo $row['Iva']; ?></td>
											 <td><?php echo $row['FechaCompra']; ?></td>
											 <td>$<?php echo $row['ValorActual']; ?></td>
											 <td><?php echo $row['Estatus']; ?></td>
											 <td><?php echo $row['Antiguedad']; ?></td>
											 <td><?php echo $row['Nombre']." ". $row['Apellido_Pat']; ?></td>
											 <td><?php echo $row['Area']; ?></td>
											 <td><?php echo $row['NombreComercial']; ?></td>
											 <td><img src="<?php echo $row['RutaImagen']; ?>" alt="" / width="80%"> </td>
											 <td><a target="_blank"href="<?php echo $row['Factura']; ?>"><img src="imagen/iconos/Archivo.png" alt="" width="75%"/></a></td>
											 <td><a target="_blank"href="<?php echo $row['XML']; ?>"><img src="imagen/iconos/Archivo.png" alt="" width="95%"/></a></td>
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
