<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>OFICINA</title>
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
						<img src="imagen/iconos/oficina2.jpg" width="48px" />
						<h1>MODULO DE EQUIPO DE OFICINA</h1>
				</div>
			<hr>
			<!-- SE LLAMA AL MENU DE ACCIONES -->
			<?php require ('menu_acciones_oficina.view.php'); ?>
			<!-- SE TERMINA DE LLAMAR A MENU ACCIONES -->
			<div><br><br><br>
				<hr>
				<!--  -->
				<form class="formulario_general" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
					<!-- INSERTAR EL IDENTIFICADOR EN LA BD EO -->
					<ul>
					<fieldset>
							<legend>Datos Generales</legend>
							<li>
								<input class="campo-estilo align-left" type="text" name="identificador" placeholder="Identificador" title="Identificador para los articulos de Equipo de Computo" maxlength="2" value="EO" readonly> &nbsp;
								<input class="campo-estilo" type="number" name="id_eo" placeholder="ID" title="Coloca un ID" maxlength="11" min="0" required>
							</li>
						<li>
					<input class="campo-estilo campo-cortado align-left" type="text" name="marca" placeholder="Marca" title="SALSAGAR, NewOffice, etc." maxlength="10" required> &nbsp;
					<input class="campo-estilo campo-cortado align-right" type="text" name="modelo" placeholder="Modelo" title="Coloca el modelo" maxlength="25" required>
						</li>
				<li>
					<input class="campo-estilo field-full" type="text" name="serie" placeholder="Numero de serie" title="Coloca el Numero de serie" maxlength="30" required>

				</li>
				<li>
<!-- LLAMADAS A LA CONSULTA PARA VISUALIZAR LOS DROPBOX -->
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

					<select class="campo-estilo" name="ubicacion" title="Elige la ubicacion del equipo">
						<?php while($row = $result_u->fetch()){
					 ?>
							<option value="<?php echo $row['id']; ?>"><?php echo $row['Area']; ?>
								</option>

							<?php } ?>
  					</select> &nbsp;
					<select class="campo-estilo"name="responsable" title="Elige el responsable del equipo">
						<?php while($rows = $result_emp->fetch()){
					 ?>
							<option value="<?php echo $rows['idEmpleado']; ?>"><?php echo $rows['Nombre'].'&nbsp;'.$rows['Apellido_Pat']; ?>
								</option>

							<?php } ?>
  					</select>
					</li>
				<li>
					<select class="campo-estilo" name="proveedor" title="Cual es el estatus del equipo">
						<!-- METODO PARA LLAMAR A LOS RESULTADSOD E PROVEEDOR -->
						<?php while($rows_pro = $result_pro->fetch()){
					 ?>
							<option value="<?php echo $rows_pro['idProveedores']; ?>"><?php echo $rows_pro['NombreComercial']; ?>
								</option>
							<?php } ?>
							<!-- TERMINA METODO -->
					</select>
					<br>&nbsp;
						<select class="campo-estilo" name="estatus" title="Cual es el estatus del equipo">
    					<option value="Activo">Activo</option>
    					<option value="Baja">Baja</option>
    					<option value="Dañado">Dañado</option>
    					<option value="EnAlmacen">En Almacen</option>
							<option value="Otros">Otros</option>
  					</select>
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
					<input class="campo-estilo campo-cortado align-left" type="text" name="costo" placeholder="Costo del equipo sin IVA" title="Solo números" maxlength="15" pattern="[-+]?[0-9]*[.,]?[0-9]+" required>
					&nbsp;
					<input class="campo-estilo campo-cortado align-right" title="Solo números" type="text" name="iva" placeholder="Cual es el IVA" maxlength="10" pattern="[-+]?[0-9]*[.,]?[0-9]+" required>
				</li>
					<li>
					<input class="campo-estilo field-full align-left" type="date" name="fechacompra" step="1" min="2000-01-01" max="2030-12-31" title="Coloca la fecha de compra" required placeholder="YYYY-MM-DD">
					</li>
				</fieldset>
				<br>
				<fieldset disabled>
					<legend>Depreciación</legend>
					<li>

					<input class="campo-estilo align-left" type="text" title="Antiguedad" readonly><label class="campo-estilo">Años</label> &nbsp;
					<input class="campo-estilo align-left" type="text" title="Porcentaje " readonly value="10%"><label class="campo-estilo">Depreciación</label>&nbsp;
					<label class="campo-estilo">$</label>
					<input class="campo-estilo align-left" type="text" title="Costo actual" readonly><label class="campo-estilo">Costo actual</label>
					</li>

				</fieldset>
					<br>
					<fieldset>
						<legend>Documentación</legend>
						<label for="imagen">Subir imagen </label><br>
					<li>
					<input class="campo-estilo field-full align-left" type="file" name="rutaimagen" title="Carga una imagen del equipo que no pese mas de 3 MB" required>
				</li><br><hr>
				<label>Factura </label><br>
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
