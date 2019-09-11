<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sistemas Avior</title>
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="imagen/favicon.ico">
		<link rel="stylesheet" href="css/font-awesome.css" charset="utf-8">
		<link rel="stylesheet" href="css/login.css" charset="utf-8">
		<script src="https://use.fontawesome.com/91edc233f0.js"></script>

	</head>
	<body>
		<div class="logo">
			<img src="imagen/logoavior.png" width="500px"alt="" />
		</div>
		<div class="contenedor">

  <h1 class="titulo">Sistema de Inventarios Generales</h1>

  <hr class="border">
  <form class="formulario" name="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" >
    <div class="form-group">
      <i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="Usuario">
    </div>

    <div class="form-group">
      <i class="icono izquierda fa fa-lock"></i><input type="password" name="password" class="password_btn" placeholder="Coloca Contraseña">
      <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
    </div>
		<?php if(!empty($errores)): ?>
				<div class="error">
					<ul>
						<?php echo $errores; ?>
					</ul>
				</div>
			<?php endif; ?>
  </form>

    <p class="texto-registrate">

		 Registro y Ayuda <a href="mailto:joe@example.com?subject=feedback">sistemas@avior.com.mx</a>
	 </p>


</div>
	</body>
</html>
