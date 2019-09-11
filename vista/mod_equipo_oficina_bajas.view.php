<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>OFICINA</title>
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
						<img src="imagen/iconos/oficina2.jpg" width="48px" />
						<h1>MODULO DE EQUIPO DE OFICINA</h1>
				</div>
			<hr>
			<!-- SE LLAMA AL MENU DE ACCIONES -->
			<?php require ('menu_acciones_oficina.view.php'); ?>
			<!-- SE TERMINA DE LLAMAR A MENU ACCIONES -->
			<div><br><br><br>
				<hr>
				<form class="formulario_general" action="" method="post">
					<fieldset>
						<legend>Coloca el ID a editar</legend>
						<ul>
							<li>
									<input class="campo-estilo" type="number" name="id_eo" placeholder="ID" title="Coloca un ID" maxlength="11" min="0">
									<input type="submit" name="name" value="Buscar >>">
							</li>
							<?php if(!empty($error)): ?>
								<div class="error">
									<ul>
										- <?php echo $error ?>
										</ul>
									</div>
							<?php endif; ?>
						</ul>

					</fieldset>
				</form>
				<br>
				<form class="formulario_general" enctype="multipart/form-data" action="eliminar_equipo_oficina.php" method="POST">

					<ul>
					<fieldset>
							<legend>Datos Generales</legend>
							<li>
								<input class="campo-estilo align-left" type="text" name="identificador" placeholder="Identificador" title="Identificador para los articulos de Equipo de Computo" maxlength="2" value="EO" readonly> &nbsp;

								<input class="campo-estilo" type="number" name="id_eo" placeholder="ID" title="Coloca un ID" maxlength="11" min="0" required value="<?php echo $rows['id_sistema']; ?>">
							</li>
						<li>
					<input class="campo-estilo campo-cortado align-left" type="text" name="marca" placeholder="Marca" title="SALSAGAR, NewOffice, etc." maxlength="10" required value="<?php echo $rows['Marca']; ?>"> &nbsp;
					<input class="campo-estilo campo-cortado align-right" type="text" name="modelo" placeholder="Modelo" title="Coloca el modelo" maxlength="25" required value="<?php echo $rows['Modelo']; ?>">
						</li>
				<li>
					<input class="campo-estilo field-full" type="text" name="serie" placeholder="Numero de serie" title="Coloca el Numero de serie" maxlength="30" required value="<?php echo $rows['Serie']; ?>">

				</li>

				<br>
					<li>
					<textarea class="campo-estilo field-full align-left" name="descripcion" rows="5" cols="35" maxlength="50" placeholder="Coloca una descripcion"><?php echo $rows['Descripcion'];?></textarea>
				</li>

				</fieldset>
				<br>
				<fieldset>
					<legend>Datos de compra</legend> <!--DATOS DE COMPRA-->
				<li>
					<input class="campo-estilo campo-cortado align-left" type="text" name="costo" placeholder="Costo del equipo sin IVA" title="Solo números" maxlength="15" pattern="[-+]?[0-9]*[.,]?[0-9]+" required value="<?php echo $rows['Costo']; ?>">
					&nbsp;
					<input class="campo-estilo campo-cortado align-right" title="Solo números" type="text" name="iva" placeholder="Cual es el IVA" maxlength="10" pattern="[-+]?[0-9]*[.,]?[0-9]+" required value="<?php echo $rows['Iva']; ?>">
				</li>
					<li>
					<input class="campo-estilo field-full align-left" type="date" name="fechacompra" step="1" min="2000-01-01" max="2030-12-31" title="Coloca la fecha de compra" required value="<?php echo $rows['FechaCompra']; ?>">
					</li>
				</fieldset>
				<br>
				<fieldset>
					<legend>Depreciación</legend>
					<li>

					<input class="campo-estilo align-left" type="text" title="Antiguedad" readonly value="<?php echo $rows['Antiguedad']; ?>"><label class="campo-estilo">Años</label> &nbsp;
					<input class="campo-estilo align-left" type="text" title="Porcentaje " readonly value="10%"><label class="campo-estilo">Depreciación</label>&nbsp;
					<label class="campo-estilo">$</label>
					<input class="campo-estilo align-left" type="text" title="Costo actual" readonly value="<?php echo $rows['ValorActual']; ?>"><label class="campo-estilo">Costo actual</label>
					</li>

				</fieldset>
					<br>
					<fieldset>
						<legend>Documentación</legend>

					<li>
					<img src="<?php echo $rows['RutaImagen']; ?>" width="50%" height="50%" alt="" />
				</li><br><hr>
				<label>Factura </label><br>
				<li>
					<a href="<?php echo $rows['Factura']; ?>"><img src="imagen/iconos/Archivo.png" width="20%" /></a>
				</li>
				<br>
				<hr>
					<label for="xml">XML de la factura </label><br>
					<li>
					<a href="<?php echo $rows['XML']; ?>"><img src="imagen/iconos/Archivo.png" width="20%" /></a>
				</li>
					</fieldset>
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
