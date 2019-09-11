<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>REPORTE DE ERRORES</title>
		<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="imagen/favicon.ico">
<link rel="stylesheet" href="css/base.css" charset="utf-8">
	</head>
	<body>
		<!-- SE MANDA A LLAMAR AL MENU -->
		<?php require ('menu.view.php');?>
		 <!-- SE TERMINA DE LLAMAR AL MENU -->
		<!-- AQUI VA EL CONTENIDO -->
		<div id="CONTENIDO">
			<div>
				<div id="TITULOXMODULO">
						<img src="imagen/pc.png" width="48px" />
						<h1>MODULO DE REPORTE DE ERRORES</h1>
				</div>
			<hr>

			<div>
				<form class="formulario_general" action="" method="post">
					<p>
						<h4>Ningun sistema es infalible a errores, si has detectado alguno o bien quieres que se implemente una mejora, ayudame a resolver este pequeño formulario.</h4>
					</p>
					<ul>
					<fieldset>
							<legend>Describe el error</legend>
						<li>
							<select class="campo-estilo" name="" title="¿En que modulo fue?" autofocus required>
								<option>Modulo de Equipo de Computo</option>
								<option>Modulo de Equipo de Oficina</option>
								<option>Modulo de Equipo de Transporte</option>
								<option>Modulo de Edificios</option>
								<option>Modulo de Administracion</option>
								<option>Modulo de Ayuda</option>
								<option>Implementar Mejora</option>
								<option>Otro</option>
							</select>
					 &nbsp;
					 <select class="campo-estilo" name="" title="¿Qué estabas haciendo?"  required>
 						<option>Al insertar</option>
 						<option>Al Editar</option>
 						<option>Al Eliminar</option>
 						<option>Al Consultar</option>
 						<option>Otro</option>
 					</select>
						</li>
				<li>
					<textarea class="campo-estilo"name="descripcion" rows="8" cols="40" maxlength="100">Cuentamelo todo...</textarea>
				</li>

					<fieldset>
						<legend>Una imagen vale mas que mil palabras</legend>
						<label for="imagen">Subir imagen </label><br>
					<li>
					<input class="campo-estilo field-full align-left" type="file" name="imagen" title="Carga una imagen del equipo que no pese mas de 3 MB">
				</li><br>

			</fieldset><br>
					<fieldset><br>
						<legend>Vamos enviame tus comentarios</legend>
					<ul>
						<input  id="boton_enviar" type="submit" name="enviar" value="Enviar">
						</fieldset>
						<br>
						<fieldset>
							<legend>Otros datos</legend>
							<p>
								<dl>
  								<dt>Administrador de Sistemas</dt>
  								<dd><b>* Ing. Alvarez H. Luis R.</b></dd>
  								<dt>Correo</dt>
  								<dd>* <a href="mailto:joe@example.com?subject=feedback">contacto@avior.com</a></dd>
									<dt>Teléfono</dt>
									<dd><b>* 55-55555555</b></dd>
									<dt>Extensión</dt>
									<dd><b>* 0000</b></dd>
							</dl>
							</p>
						</fieldset>
				</form>
				<br><br><br><br>
			</div>
			</div>
		</div>
		<!-- TERMINA EL CONTENIDO -->
	</body>
</html>
