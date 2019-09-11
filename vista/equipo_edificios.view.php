<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>EDIFICIOS</title>
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
						<img src="imagen/iconos/edificios.jpg" width="48px" />
						<h1>MODULO DE EDIFICIOS</h1>
				</div>
			<hr>

			<!-- SE LLAMA AL MENU DE ACCIONES -->
			<?php require ('menu_acciones.view.php') ?>
			<!-- SE TERMINA DE LLAMAR A MENU ACCIONES -->

			<div><br><br>
				<hr>
				<h3>El identificador para los Edificios es ED</h3>
				<form class="formulario_general" action="equipo_oficina.php" method="post">
					<!-- INSERTAR EL IDENTIFICADOR EN LA BD EO -->
					<ul>
					<fieldset>
							<legend>Datos Generales</legend>
						<li>

					<input class="campo-estilo campo-cortado align-left" type="text" name="tamanoconstruccion" placeholder="Tamaño de construccion en metros cuadrados" title=" 200 m, 300 m, etc." maxlength="10"> &nbsp;
					<input class="campo-estilo campo-cortado align-right" type="text" name="tamanoterreno" placeholder="Tamaño Terreno" title="Todo en Metros cuadrados" maxlength="10">
						</li>

				<li>
					<select class="campo-estilo field-full align-left" name="ubicacion" title="Elige la ubicacion del equipo">
    					<option value="ubicacion 1">Ubicacion 1</option>
    					<option value="ubicacion 2">Ubicacion 2</option>
    					<option value="ubicacion 3">Ubicacion 3</option>
    					<option value="ubicacion 4">Ubicacion 4</option>
  					</select> &nbsp;

					</li>
				<li>
						<select class="campo-estilo field-full align-left"name="estatus" title="Cual es el estatus del equipo">
    					<option value="Estatus 1">Estatus 1</option>
    					<option value="Estatus 2">Estatus 2</option>
    					<option value="Estatus 3">Estatus 3</option>
    					<option value="Estatus 4">Estatus 4</option>
  					</select> &nbsp;
					<input class="campo-estilo field-full align-right" type="text" name="banos" placeholder="Numero de Baños" title="Coloca la cantidad de BAños completos" maxlength="10">
				</li>
				<br>
					<li>
					<textarea class="campo-estilo field-full align-left" name="descripcion" rows="5" cols="35" maxlength="50" placeholder="Coloca una descripcion"></textarea>
				</li>

				</fieldset>
				<br>
				<fieldset>
					<legend>Datos de compra</legend> <!--DATOS DE COMPRA-->
				<li>
					<input class="campo-estilo field-full align-left" type="text" name="costo" placeholder="Costo del equipo sin IVA" title="Solo números" maxlength="15" pattern="[0-9.]*">
					&nbsp;

				</li>
					<li>
					<input class="campo-estilo field-full align-left" type="date" name="fechacompra" step="1" min="2013-01-01" max="2030-12-31" title="Coloca la fecha de compra">
					</li>
				</fieldset>
					<!-- Este espacio es para el valor actual de equipo aplicando la depreciasion -->
					<!--AQUI  -->
					<!-- Este espacio es para el valor actual de equipo aplicando la depreciasion -->
					<br>
					<fieldset>
						<legend>Documentación</legend>
						<label for="imagen">Subir imagen </label><br>
					<li>
					<input class="campo-estilo field-full align-left" type="file" name="imagen" title="Carga una imagen del equipo que no pese mas de 3 MB">
				</li><br><hr>
				<label for="pdf">Factura </label><br>
				<li>
					<input class="campo-estilo field-full align-left" type="file" name="pdf" title="Carga la factura del equipo">
				</li>
				<br>
				<hr>
					<label for="xml">XML de la factura </label><br>
					<li>
					<input class="campo-estilo field-full align-left" type="file" name="xml" title="Carga el XML de la factura del equipo">
				</li>
					</fieldset>
					<ul>
						<input  id="boton_enviar" type="submit" name="guardar" value="Guardar">
				</form>
				<br><br><br><br>
			</div>
			</div>
		</div>
		<!-- TERMINA EL CONTENIDO -->
	</body>
</html>
