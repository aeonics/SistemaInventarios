<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>UBICACIONES</title>
		<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="imagen/favicon.ico">
<link rel="stylesheet" href="css/base.css" charset="utf-8">
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
						<h1>MODULO DE UBICACIONES</h1>
				</div>
			<hr>

			<!-- SE LLAMA AL MENU DE ACCIONES -->
			<?php require ('menu_acciones_ubicaciones.view.php') ?><br>
			<!-- SE TERMINA DE LLAMAR A MENU ACCIONES -->

			<div><br><br>
				<hr>

				<form class="formulario_general" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
					<!-- INSERTAR EL IDENTIFICADOR EN LA BD EC -->
					<ul>
					<fieldset>
							<legend>Datos Generales</legend>
							<li>
							<input class="campo-estilo full-field align-left" type="number" name="id_ubicacion" placeholder="ID de Ubicacion" title="1, 2, 11, usa numeracion entera" maxlength="45" min="0" required>
							</li>
							<br>
					<li>
					<input class="campo-estilo full-field align-left" type="text" name="area" placeholder="Area" title="Edificio 1, Seccion 1, Complejo A, etc." maxlength="45" required> &nbsp;
					<input class="campo-estilo full-field align-right" type="text" name="ubicacion" placeholder="Ubicación" title="Piso 1, Patio, Contabilidad, Centrod e Computo, etc." maxlength="45" required>
					<input  type="submit" name="guardar" value="Guardar>>">
						</li>
						<br>

				</form>
				<?php if(!empty($error)): ?>
					<div class="error">
						<ul>
							- <?php echo $error ?>
						</ul>
					</div>
				<?php endif; ?>
				<br><br><br><br>
			</div>
			</div>
		</div>
		<!-- TERMINA EL CONTENIDO -->
	</body>
</html>
