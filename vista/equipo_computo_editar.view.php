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
								<legend>Coloca el ID para buscar</legend>
								 <li>
										<input class="campo-estilo full-field align-left" type="number" name="id_bus" placeholder="ID Equipo de computo" title="sa numeracion entera" maxlength="45" required>
										<input  type="submit" name="name" value="Buscar">
								</li>


							</ul>
					</form>
				<br>
			<form class="formulario_general" enctype="multipart/form-data" action="guardar_ecomputo.php" method="POST">
					<ul>
					<fieldset>
							<legend>Datos Generales</legend>
							<li>
									<input class="campo-estilo align-left" type="text" name="identificador" placeholder="Identificador" title="Identificador para los articulos de Equipo de Computo" maxlength="2" value="EC" readonly> &nbsp;

									<input class="campo-estilo align-left" type="number" name="id_ec" placeholder="ID" title="Coloca un ID" maxlength="11" min="0" required readonly value="<?php echo $rows['id_sistema']; ?>">
							</li>
							<br>
						<li>
					<input class="campo-estilo campo-cortado align-left" type="text" name="marca" placeholder="Marca" title="HP, Lenovo, DELL, Samsung, etc." maxlength="10" required value="<?php echo $rows['Marca']; ?>"> &nbsp;
					<input class="campo-estilo campo-cortado align-right" type="text" name="modelo" placeholder="Modelo" title="Coloca el modelo" maxlength="25" required value="<?php echo $rows['Modelo']; ?>">
						</li>
				<li>
					<input class="campo-estilo campo-cortado align-left" type="text" name="serie" placeholder="Numero de serie" title="Coloca el Numero de serie  del equipo" maxlength="30" required value="<?php echo $rows['Serie']; ?>"> &nbsp;
					<input class="campo-estilo campo-cortado align-right" type="text" name="parte" placeholder="Numero de Parte" title="Coloca el Numero de Parte(Part Number)" maxlength="30" required value="<?php echo $rows['NoParte']; ?>">
				</li>

				<li>
					<select class="campo-estilo align-left" name="ubicacion" title="Elige la ubicacion del equipo">
						<?php
						require_once ('controlador/conexion_bd.php');
						$conexion = dbConnect();
						$query_ubicacion = "SELECT * FROM Ubicacion";
						$result_u = $conexion->query($query_ubicacion);
						$query_pro = "SELECT * FROM Proveedores";
						$result_pro = $conexion->query($query_pro);
						$query_empleado = "SELECT * FROM Empleado";
						$result_emp = $conexion->query($query_empleado);
						?>
						<?php while($row = $result_u->fetch()){
					 ?>
    					<option value="<?php echo $row['id']; ?>" ><?php echo $row['Area']; ?>
								</option>
							<?php } ?>

  					</select> &nbsp;
					<select class="campo-estilo field-full align-left"name="responsable" title="Elige el responsable del equipo" required>
						<?php while($rowss = $result_emp->fetch()){
					 ?>
							<option value="<?php echo $rowss['idEmpleado']; ?>"><?php echo $rowss['Nombre'].'&nbsp;'.$rowss['Apellido_Pat']; ?>
								</option>

							<?php } ?>

  					</select>
					</li>
				<li>
					<select class="campo-estilo align-left"name="proveedor" title="Elige el proveedor">
						<?php while($rows_pro = $result_pro->fetch()){
					 ?>
							<option value="<?php echo $rows_pro['idProveedores']; ?>"><?php echo $rows_pro['NombreComercial']; ?>
								</option>

							<?php } ?>
  					</select>
						&nbsp;
						<select class="campo-estilo field-full align-left"name="estatus" title="Cual es el estatus del equipo">
    					<option value="Activo">Activo</option>
    					<option value="En Almacen">En Almacen</option>
    					<option value="Baja">Baja</option>
    					<option value="Dañado">Dañado</option>
							<option value="Otros">Otros</option>
  					</select>
				</li>
				<br>
					<li>
					<textarea class="campo-estilo field-full align-left" name="descripcion" rows="5" cols="35" maxlength="50" placeholder="Coloca una descripcion" required ><?php echo $rows['Descripcion']; ?></textarea>
				</li>

				</fieldset>
				<br>
				<fieldset>
					<legend>Datos de compra</legend> <!--DATOS DE COMPRA-->
				<li>
					<label class="campo-estilo">$</label><input class="campo-estilo campo-cortado align-left" type="text" name="costo" placeholder="Costo del equipo sin IVA" title="Solo números" maxlength="15" pattern="[-+]?[0-9]*[.,]?[0-9]+" required value="<?php echo $rows['Costo']; ?>">
					&nbsp;
					<input class="campo-estilo campo-cortado align-right" title="Cual es el IVA" pattern="[0-9.]*" type="text" name="iva" placeholder="Cual es el IVA" maxlength="10" min="0" pattern="[-+]?[0-9]*[.,]?[0-9]+" required value="<?php echo $rows['Iva']; ?>">
				</li>
					<li>
					<input class="campo-estilo field-full align-left" type="date" name="fechacompra" step="1" min="2013-01-01" max="2030-12-31" title="Coloca la fecha de compra" required value="<?php echo $rows['FechaCompra']; ?>">
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
						<label for="imagen">Subir imagen </label><br>
					<li>
					<input class="campo-estilo field-full align-left" type="file" name="rutaimagen" title="Carga una imagen del equipo que no pese mas de 2 MB" required>
				</li><br><hr>
				<label for="pdf">Factura </label><br>
				<li>
					<input class="campo-estilo field-full align-left" type="file" name="pdf" title="Carga la factura del equipo" required>
				</li>
				<br>
				<hr>
					<label for="xml">XML de la factura </label><br>
					<li>
					<input class="campo-estilo field-full align-left" type="file" name="filexml" title="Carga el XML de la factura del equipo" required>
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
