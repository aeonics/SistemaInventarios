<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PROVEEDORES</title>
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
						<img src="imagen/iconos/proveedores.png" width="48px" />
						<h1>MODULO DE PROVEEDORES</h1>
				</div>
			<hr>
			<!-- SE LLAMA AL MENU DE ACCIONES -->
			<?php require ('menu_acciones_proveedores.view.php');?><br>
			<!-- SE TERMINA DE LLAMAR A MENU ACCIONES -->
			<div><br><br>
				<hr>

				<form class="formulario_general" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

					<ul>
					<fieldset>
							<legend>Datos del Proveedor</legend>
							<li>
								<input class="campo-estilo full-field align-left" type="number" name="id_altapro" placeholder="ID" title="Coloca un ID para identificar este proveedor" maxlength="11" pattern="[1-9]{1-11}" min ="0" required>
							</li>
							<br>
						<li>

					<input class="campo-estilo campo-cortado align-left" type="text" name="ncomercial" placeholder="Nombre Comercial" title="HP, Lenovo, DELL, Samsung, etc." maxlength="50"> &nbsp;
					<input class="campo-estilo campo-cortado align-right" type="text" name="nombrefiscal" placeholder="Nombre Fiscal" title="Coloca el nombre fiscal de la empresa" maxlength="45">
						</li>
				<li>
					<input class="campo-estilo campo-cortado align-left" type="text" name="calle" placeholder="Calle" title="Coloca la calle" maxlength="30"> &nbsp;
					<input class="campo-estilo campo-cortado align-right" type="text" name="nexterior" placeholder="Coloca el Numero" title="Coloca el Numero" maxlength="5">
				</li>
				<li>
					<input class="campo-estilo full-field align-right" type="text" name="delegacion" placeholder="Delegacion" title="Coloca la Delegacion" maxlength="50">
					 &nbsp;
					<input class="campo-estilo full-field align-right" type="text" name="estado" placeholder="Estado" title="Coloca el estado" maxlength="20">
					</li>
				<li>
						<input class="campo-estilo full-field align-right" type="text" name="ninterior" placeholder="Numero Interior" title="Coloca el Numero interior" maxlength="5">
						&nbsp;
						<input class="campo-estilo full-field align-right" type="text" name="rfc" placeholder="RFC" title="Coloca el RFC" maxlength="15">
				</li>

					<li>
					<input class="campo-estilo full-field align-right" type="text" name="contacto1" placeholder="Contacto 1" title="Coloca un contacto" maxlength="30">
					&nbsp;
					<input class="campo-estilo full-field align-right" type="text" name="contacto2" placeholder="Contacto 2" title="Coloca un contacto" maxlength="30">
				</li>
				<li>
				<input class="campo-estilo full-field align-right" type="number" name="telefono1" placeholder="Telefono 1" title="Coloca un telefono"maxlength="15">
				&nbsp;
				<input class="campo-estilo full-field align-right" type="number" name="telefono2" placeholder="Telefono 2" title="Coloca un telefono" maxlength="15">
			</li>
			<li>
			<input class="campo-estilo full-field align-right" type="mail" name="email1" placeholder="email 1" title="Coloca un email de contacto"maxlength="45">
			&nbsp;
			<input class="campo-estilo full-field align-right" type="mail" name="email2" placeholder="email 2" title="Coloca un email de contacto" maxlength="45">
		</li><br>
		<li>
			<textarea class="campo-estilo" name="bancarios" rows="8" cols="30" maxlength="60">Coloca los datos Bancarios restantes</textarea>
		</li>
				</fieldset>
				<br>


					<ul>
						<input  id="boton_enviar" type="submit" name="guardar" value="Guardar">
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
