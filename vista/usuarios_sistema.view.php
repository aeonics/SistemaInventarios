<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>USUARIOS DE SISTEMA</title>
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
						<h1>USUARIOS DEL SISTEMA</h1>
				</div>
			<hr>


			<div>
			<form class="formulario_general" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
					<ul>
					<fieldset>
							<legend>Coloca los datos indicados</legend>

						<li>
					<input class="campo-estilo campo-cortado align-left" type="text" name="altausuario" placeholder="Nombre de Usuario" title="Coloca un Usuario" maxlength="15" required pattern="[a-zA]{1-15}"> &nbsp;
					<input class="campo-estilo campo-cortado align-right" type="password" name="altapassword" placeholder="Password" title="Maximo 10 caracteres" maxlength="10" required>
					<input type="submit" name="guardar" value="Guardar>>">
						</li>
						<?php if(!empty($error)): ?>
							<div class="error">
								<ul>
									<li><?php echo $error ?></li>

									</ul>

							</div>
						<?php endif; ?>
				</form>

				<fieldset>
					<legend><h2>Listado de Usuarios del Sistema</h2></legend>
				<table border="1px solid grey" >

			             <tr>
			                 <th scope="row">ID</th>
			                 <th>Usuario</th>
			                 <th>Password</th>
			             </tr>
									 <?php require_once ('controlador/conexion_bd.php');
									 $conexion = dbConnect();
									 $query_us = "SELECT * FROM UsuarioSistema";
									 $result = $conexion->query($query_us);

										?>
									 <?php while($row_lista = $result->fetch()){
					 				?>
			             <tr>
			                 <td><?php echo $row_lista['idUsuarios']; ?></td>
			                 <td><?php echo $row_lista['Usuario']; ?></td>
			                 <td><?php echo $row_lista['Password']; ?></td>

			             </tr>
									 <?php } ?>
			         </table>
							 </fieldset>
							 <br>
							 <fieldset>
							 	<legend>Cambia Password</legend>
								<form class="formulario_general" action="cambia_password.php" method="POST">
									<ul>
										<li><label class="campo-estilo">Usuario: </label><input class="campo-estilo campo-cortado align-left" type="text" name="bususuario" placeholder="Nombre de Usuario" title="Coloca un Usuario" maxlength="15" required pattern="[a-zA]{1-15}">
										<label class="campo-estilo">Password: </label><input class="campo-estilo campo-cortado align-right" type="password" name="newpassword" placeholder="Password" title="Maximo 10 caracteres" maxlength="10" required>
										<input type="submit" name="enviar" value="Cambiar>>">
										</li>
									</ul>

								</form>

							 </fieldset>
							 <br>
							 <fieldset>
							 	<legend>Elimina Usuario</legend>
								<form class="formulario_general" action="elimina_usuario_sistema.php" method="POST">
									<ul>
										<li><label class="campo-estilo">ID: </label><input class="campo-estilo  align-left" type="number" name="eliminausuario" placeholder="Coloca el ID del usuario" title="Coloca un ID" maxlength="15" required pattern="[1-9]{1-15}">

										<input type="submit" name="enviar" value="Eliminar>>">
										</li>
									</ul>

								</form>

							 </fieldset>



				<br><br><br><br>
			</div>
			</div>
		</div>
		<!-- TERMINA EL CONTENIDO -->
	</body>
</html>
