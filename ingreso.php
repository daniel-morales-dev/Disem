<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Index">
		<meta name="keywords" content="HTML5, CSS3, JavaScript">
		<link rel="stylesheet" type="text/css" href="css/ingreso.css">
		<title>DISEM</title>
	</head>
		<body>
		<center>
		<form action="validar.php" method="POST">
		<center><img src="imagenes/logo.png" width="200" height=""></center>
			<h2>INGRESO</h2>
			<input type="text" placeholder="&#128272; usuario" name="usuario">
			<input type="password" placeholder="&#128272; password" name="password">

			<input type="submit" value="Ingresar">


			<h4><a href="index.php">Inicio</a> <a href="registrar.php">Crear usuario</a> <a href="admin.php">Administrador</a></h4>

			<center><h3><div align="left"><i>DISEM 2016 ©</i>| Telefono: 311 7308519 | Email: alejo999@live.com | Daniel Morales</div></h3></center>
		<?php
			if (isset($_POST['submit'])) {
				require("validar.php");
			}
		?>
		</form>
		</center>
		</body>