<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>COMPUTO</title>
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
						<img src="imagen/iconos/pc.png" width="48px" />
						<h1>MODULO DE EQUIPO DE COMPUTO</h1>
				</div>

			<hr>
			<br>
			<!-- SE LLAMA AL MENU DE ACCIONES -->
			<?php require ('menu_acciones_computo.view.php'); ?>
			<!-- SE TERMINA DE LLAMAR A MENU ACCIONES-->
			<div>

				<br><br><br>
				<hr>
				<form class="formulario_general" action="" method="POST">
						<ul>
						<fieldset>
								<legend>Coloca el ID para dar de Baja</legend>
								 <li>
										<input class="campo-estilo full-field align-left" type="number" name="id_bus" placeholder="ID Equipo de computo" title="sa numeracion entera" maxlength="45" required>
										<input  type="submit" name="name" value="Buscar">
								</li>


							</ul>
					</form>
				<br>
			<form class="formulario_general" enctype="multipart/form-data" action="accion_ecomputo_baja.php" method="POST">
					<ul>
					<fieldset>
							<legend>Datos Generales</legend>
							<li>
									<input class="campo-estilo align-left" type="text" name="identificador" placeholder="Identificador" title="Identificador para los articulos de Equipo de Computo" maxlength="2" value="EC" readonly> &nbsp;

									<input class="campo-estilo align-left" type="number" name="id_ec" placeholder="ID" title="Coloca un ID" maxlength="11" min="0" required readonly value="<?php echo $rows['id_sistema']; ?>">
							</li>
							<br>
						<li>
					<input class="campo-estilo campo-cortado align-left" type="text" name="marca" placeholder="Marca" title="HP, Lenovo, DELL, Samsung, etc." maxlength="10"  value="<?php echo $rows['Marca']; ?>"> &nbsp;
					<input class="campo-estilo campo-cortado align-right" type="text" name="modelo" placeholder="Modelo" title="Coloca el modelo" maxlength="25" value="<?php echo $rows['Modelo']; ?>">
						</li>
				<li>
					<input class="campo-estilo campo-cortado align-left" type="text" name="serie" placeholder="Numero de serie" title="Coloca el Numero de serie  del equipo" maxlength="30" value="<?php echo $rows['Serie']; ?>"> &nbsp;
					<input class="campo-estilo campo-cortado align-right" type="text" name="parte" placeholder="Numero de Parte" title="Coloca el Numero de Parte(Part Number)" maxlength="30" value="<?php echo $rows['NoParte']; ?>">
				</li>


				<br>
					<li>
					<textarea class="campo-estilo field-full align-left" name="descripcion" rows="5" cols="35" maxlength="50" placeholder="Coloca una descripcion" ><?php echo $rows['Descripcion']; ?></textarea>
				</li>

				</fieldset>
				<br>
				<fieldset>
					<legend>Datos de compra</legend> <!--DATOS DE COMPRA-->
				<li>
					<label class="campo-estilo">$</label><input class="campo-estilo campo-cortado align-left" type="text" name="costo" placeholder="Costo del equipo sin IVA" title="Solo números" maxlength="15" pattern="[-+]?[0-9]*[.,]?[0-9]+"  value="<?php echo $rows['Costo']; ?>">
					&nbsp;
					<input class="campo-estilo campo-cortado align-right" title="Cual es el IVA" pattern="[0-9.]*" type="text" name="iva" placeholder="Cual es el IVA" maxlength="10" min="0" pattern="[-+]?[0-9]*[.,]?[0-9]+"  value="<?php echo $rows['Iva']; ?>">
				</li>
					<li>
					<input class="campo-estilo field-full align-left" type="date" name="fechacompra" step="1" min="2013-01-01" max="2030-12-31" title="Coloca la fecha de compra" value="<?php echo $rows['FechaCompra']; ?>">
					</li>
				</fieldset>
					<br>
					<fieldset>
						<legend>Depreciación</legend>
						<li>

						<input class="campo-estilo align-left" type="text" title="Antiguedad" readonly value="<?php echo $rows['Antiguedad']; ?>"><label class="campo-estilo">Años</label> &nbsp;
						<input class="campo-estilo align-left" type="text" title="Porcentaje " readonly value="25%"><label class="campo-estilo">Deprecición</label>&nbsp;
						<label class="campo-estilo">$</label>
						<input class="campo-estilo align-left" type="text" title="Costo actual" readonly value="<?php echo $rows['ValorActual']; ?>"><label class="campo-estilo">Costo actual</label>
						</li>

					</fieldset>
					<br>
					<fieldset>
						<legend>Documentación</legend>

					<li>

						<img src="<?php echo $rows['RutaImagen']; ?>" alt="Imagen del equipo" width="50%" height="50%" />

				</li><br><hr>
				<label >Factura </label><br>
				<li>
					<a target="_blank"href="<?php echo $rows['Factura']; ?>"><img src="imagen/iconos/Archivo.png" alt="Descarga" width="10%"></a>
				</li>
				<br>
				<hr>
					<label for="xml">XML de la factura </label><br>
					<li>
					<a target="_blank"href="<?php echo $rows['XML']; ?>"><img src="imagen/iconos/Archivo.png" alt="Descarga" width="10%"></a>
				</li>
					</fieldset>
					<ul>
						<input  id="boton_enviar" type="submit" name="guardar" value="Eliminar" onclic="alert('Eliminado')">
				</form>
				<?php if(!empty($error)): ?>
					<div class="error">
						<ul>
							- <?php echo $error ?>
							</ul>
						</div>
				<?php endif; ?>
				<?php if(!empty($Aviso)): ?>
					<div class="error">
						<ul>
							- <?php echo $Aviso ?>
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
