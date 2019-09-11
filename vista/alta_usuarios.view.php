<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>EMPLEADOS</title>
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
						<img src="imagen/iconos/cliente.jpg" width="48px" />
						<h1>MODULO DE EMPLEADOS</h1>
				</div>
			<hr>

			<!-- SE LLAMA AL MENU DE ACCIONES DE LOS USUARIOS -->
			<?php require ('menu_acciones_usuarios.view.php') ?>
			<!-- SE TERMINA DE LLAMAR A MENU ACCIONES DE LOS USARIOS -->
<br>
			<div><br><br>
				<hr>

				<form class="formulario_general" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
					<ul>
					<fieldset>
							<legend>Datos Generales</legend>
							<li>
									<input class="campo-estilo full-field align-left" type="number" name="id" placeholder="ID" title="Coloca una clave que identifique este usuario" maxlength="10" pattern="[1-9]{1-10}" min="0" required>
							</li>
							<br>
						<li>
					<input class="campo-estilo campo-cortado align-left" type="text" name="nombre1" placeholder="Primer Nombre" title="Coloca el nombre" maxlength="25" required pattern="[a-zA]{1-25}"> &nbsp;
					<input class="campo-estilo campo-cortado align-right" type="text" name="nombre2" placeholder="Segundo Nombre" title="Coloca el segundo nombre" maxlength="25">
						</li>
				<li>
					<input class="campo-estilo campo-cortado align-left" type="text" name="apellido1" placeholder="Primer Apellido" title="Coloca el primer Apellido" maxlength="25" required> &nbsp;
					<input class="campo-estilo campo-cortado align-right" type="text" name="apellido2" placeholder="Segundo Apellido" title="Coloca el segundo apellido" maxlength="25">
				</li>
				<li>
					<input class="campo-estilo campo-cortado align-right" type="text" name="actividad" placeholder="Puesto" title="Coloca el puesto del empleado" maxlength="25">
					</li>
				<br>
				</fieldset>
					<fieldset>
						<legend>Documentación</legend>
						<label for="imagen">Subir imagen </label><br>
					<li>
						<label class="campo-estilo">Solo archivos JPG y menor a 500KB</label>
					<input class="campo-estilo field-full align-left" type="file" name="imagen" size="30" title="Carga una imagen del equipo que no pese mas de 3 MB">

				</li>
			</fieldset>
						<input  id="boton_enviar" type="submit" name="guardar" value="Guardar">
				</form>

				<?php if(!empty($error)): ?>
					<div class="error">
						<ul>
							<li><?php echo $error ?></li>

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
