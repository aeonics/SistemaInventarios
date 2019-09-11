<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>GENREA QR</title>
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
						<img src="imagen/iconos/qr.png" width="48px" />
						<h1>MODULO DE GENERACION DE CODIGO QR</h1>
				</div>
			<hr>
			<br>
			<h3>En este modulo se genera los códigos QR de cada numero de inventario, selecciona el tipo de QR para cada modulo introduciendo solo el ID</h3>
			<br>
			<form class="formulario_general" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
				<ul>
				<fieldset>
					<legend>Introduce el ID para equipo de Computo</legend>
					<li>
						<input class="campo-estilo" type="text" name="identificador_ec" value="EC" readonly>
					</select>
					<input class="campo-estilo" type="number" name="ID_QR_EC" placeholder="COLOCA EL ID">
					</li>
					<li><input type="submit" name="GenerarQR" value="Generar QR>>"></li>
					<br>

				</fieldset>
				<br>
			</ul>
			</form>
			<form class="formulario_general" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
				<ul>
				<fieldset>
					<legend>Introduce el ID para equipo de Oficina</legend>
					<li>
						<input class="campo-estilo" type="text" name="identificador_eo" value="EO" readonly>
					<input class="campo-estilo" type="number" name="ID_QR_EO" placeholder="COLOCA EL ID">
					</li>
					<li><input type="submit" name="GenerarQR" value="Generar QR>>"></li>
					<br>

				</fieldset>
			</ul>
		</form><br>
			<hr>
			<h3>El codigo generado puede ser guardado</h3>
			<?php if(!empty($Aviso)): ?>
				<div class="error">
					<ul>
						 <?php echo $Aviso ?>
						</ul>
					</div>
			<?php endif; ?>
<br><br><br><br>
			</div>
		</div>
		<!-- TERMINA EL CONTENIDO -->
	</body>
</html>
