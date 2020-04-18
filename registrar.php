<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Index">
		<meta name="keywords" content="HTML5, CSS3, JavaScript">
		<link rel="stylesheet" type="text/css" href="css/registrar.css">
		<title>DISEM</title>
	</head>
		<body>
		<center>
		<form action="registro1.php" method="POST">

				<center><img src="imagenes/logo.png" width="200" height=""></center>

				<h2>Usuario</h2>
				<input type="text" name="usuario" class="form-input" required>

				<h2>Contraseña</h2>
				<input type="password" name="password" class="form-input" required>

				<h2> Repetir Contraseña</h2>
				<input type="password" name="rpassword" class="form-input" required>

				<h2>Email</h2>
				<input type="email" name="email" class="form-input" required>

				<div align="center"><input type="submit" name="submit" value="Registrar"></div>

				<div align="center"><input type="reset" value="Vaciar"></div>

				<h4><a href="index.php">Inicio</a><a href="ingreso.php">¿Ya tienes cuenta?</a></h4>

				<h3><div align="left"><i>DISEM 2016 © </i> | Telefono: 311 7308519 | Email: alejo999@live.com | Daniel Morales</div></h3>
		</form>
		<?php
			if (isset($_POST['submit'])) {
				require("registro1.php");
			}
		?>
		</center>
		</body>