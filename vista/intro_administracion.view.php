<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>ADMINISTRACION</title>
		<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="imagen/favicon.ico">
		<link rel="stylesheet" href="css/base.css" charset="utf-8">
	</head>
	<body>
		<!-- SE MANDA A LLAMAR AL MENU -->
		<?php
		require ('menu.view.php')
		 ?>
		 <!-- SE TERMINA DE LLAMAR AL MENU -->
<!-- TERMINA FOOTER -->
		</div>
		<!-- AQUI VA EL CONTENIDO -->
		<div id="CONTENIDO">
			<center><img src="imagen/iconos/admin.png" alt="" width="64px"  /></center>
							<span id="contenido1">

								<h2>MODULO DE ADMINISTRACION</h2>
									<br><hr>
								<p>
									Los módulos de administración contienen configuraciones que permiten a los agentes supervisar un Empleado, una Ubicación y/o un Proveedor. Estas configuraciones incluyen información general de cada uno de los sub-módulos. Como lo es Altas, Cambios, Bajas y Consultas</p>
									</span>
									<ul>
										<li><a href="alta_usuarios.php" class="button spark">Empleados</a></li>
										<li><a href="alta_proveedores.php" class="button add">Proveedores</a></li>
										<li><a href="alta_ubicaciones.php" class="button play">Ubicaciones</a></li>
										<li><a href="usuarios_sistema.php" class="button spark" title="Altas de usuarios para el sistema">Usuarios Sistema</a></li>
									</ul>


		<!-- TERMINA EL CONTENIDO -->
	</body>
</html>
