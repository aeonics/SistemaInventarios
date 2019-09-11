<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>USUARIOS</title>
		<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="imagen/favicon.ico">
<link rel="stylesheet" href="css/base.css" charset="utf-8">
	</head>
	<body>
		<!-- SE MANDA A LLAMAR AL MENU -->
		<?php
		require ('menu.view.php');
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
			<?php require ('menu_acciones_usuarios.view.php') ?>
			<!-- SE TERMINA DE LLAMAR A MENU ACCIONES DE LOS USARIOS -->
<br>
			<div><br><br>
				<hr>
			<form class="formulario_general" action="" method="POST">
					<ul>
					<fieldset>
							<legend>Coloca el ID del Usuario para eliminar</legend>
							 <li>
									<input class="campo-estilo full-field align-left" type="text" name="id" placeholder="ID para editar" title="Coloca el ID que quieres editar" maxlength="10" pattern="[0-9]{1-10}" required  >
									<input type="submit" name="name" value="Buscar>>">
							</li>
							<br>

						</ul>
				</form>


				<form class="formulario_general" enctype="multipart/form-data" action="accion_eliminar_empleado.php" method="POST">
					<ul>
					<fieldset>
							<legend>Verifica que sea el usuario que buscas</legend>
							 <li>
									<input class="campo-estilo campo-cortado align-left" type="text" name="ida" placeholder="ID para editar" title="Coloca el ID que quieres editar" maxlength="10" pattern="[0-9]{1-10}" readonly required value="<?php echo $rows['ID_sistema']; ?>" readonly>

							</li>
							<br>
						<li>
					<input class="campo-estilo campo-cortado align-left" type="text" name="nombre1" placeholder="Primer Nombre" title="Coloca el nombre" maxlength="25" required pattern="[a-zA]{1-25}" value="<?php echo $rows['Nombre']; ?>" readonly> &nbsp;
					<input class="campo-estilo campo-cortado align-right" type="text" name="nombre2" readonly placeholder="Segundo Nombre" title="Coloca el segundo nombre" maxlength="25" value="<?php echo $rows['Nombre2']; ?>">
						</li>
				<li>
					<input class="campo-estilo campo-cortado align-left" type="text" name="apellido1" placeholder="Primer Apellido" title="Apellido Paterno" maxlength="25" readonly required value="<?php echo $rows['Apellido_Pat']; ?>"> &nbsp;
					<input class="campo-estilo campo-cortado align-right" type="text" name="apellido2" readonly placeholder="Segundo Apellido" title="Apellido Materno" maxlength="25" value="<?php echo $rows['Apellido_Mat']; ?>">
				</li>
				<li>
					<input class="campo-estilo full-field align-right" type="text" name="actividad" placeholder="Actividad" readonly value="<?php echo $rows['Actividad']; ?>" title="Puesto del empleado" maxlength="25">

					</li>
				<br>
				</fieldset>
					<fieldset>
						<legend>Imagen archivada</legend>

					<li>
					<img src="<?php echo $rows['RutaImagenEmpleado']?>" width="30%" height="30%" alt="" />

				</li>
			</fieldset>
			<fieldset>
				<legend>Continua si quieres eliminar...</legend>
						<input  id="boton_enviar" type="submit" name="actualizar" value="Eliminar">
					</fieldset>
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
