<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<!-- si hay error se redirige sola -->
		<meta http-equiv="refresh" content="3;url=http://localhost/Proyecto/Inventarios_v2/mod_equipo_computo.php" />
		<title>COMPUTO</title>
<link rel="stylesheet" href="css/base.css" charset="utf-8">
	</head>
	<body>
		<!-- SE MANDA A LLAMAR AL MENU -->
		<?php
		require ('vista/menu.view.php');
		 ?>
		 <!-- SE TERMINA DE LLAMAR AL MENU -->
		<!-- AQUI VA EL CONTENIDO -->
		<div id="CONTENIDO">
			<div>
				<div id="TITULOXMODULO">
						<img src="imagen/iconos/pc.png" width="48px" />
						<h1>MODULO DE EQUIPO DE COMPUTO</h1>
				</div>

			<hr>
			<br>
			<!-- SE LLAMA AL MENU DE ACCIONES -->
			<?php require ('vista/menu_acciones_computo.view.php') ?>
			<!-- SE TERMINA DE LLAMAR A MENU ACCIONES--><br>
			<hr>
			<br>
			<ul>
				<li><h1>El ID que ingresaste ya existe</h1></li>

			</ul>

				<br><br><br><br>
			</div>
			</div>
		</div>
		<!-- TERMINA EL CONTENIDO -->
	</body>
</html>
