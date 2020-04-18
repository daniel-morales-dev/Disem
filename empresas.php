<?php
	require('conexion2.php');
	
	$query="SELECT id, usuario, email FROM registro";
	
	$resultado=$mysqli->query($query);
	
?>


<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/empresas.css">
		<link href='https://fonts.googleapis.com/css?family=Russo+One' rel='stylesheet'>
		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script src="index2.js"></script>
			<title>DISEM</title>
	</head>
	<body>
	<?php
			session_start();
			
			if (isset($_SESSION["u_usuario"])) {
				
				
				
			}
			else{
				header("location: ingreso.php");
				
			}
		?>	
		<div id="contenido">
			<header>
				<hgroup>
					<img src="imagenes/logo.png" width = "80"><h1>DISEM - Diseños Morales</h1>
				</hgroup>
				<nav>
				<ul>
					<li><a href="bienvenido.php">Inicio</a></li>
					<li><a href="cerrar_sesion.php">Cerrar Sesion</a></li>
				</ul>
			</nav>
			</header>
			<section>
				<div id="textopr">
				<hgroup>
					<h1>
					<center>Empresas</center>
					</h1>
					<form name="empresas" method="POST" action="empresanueva.php">
			<center><table width="50%" border="0">
				<tr>
					<td width="20"><b>Nombre de la empresa</b></td>
					<td><b>NIT</b></td>
				</tr>
				<tr>
					<td width="30"><input type="text" name="empresa" size="25" required/></td>
					<td><input type="text" name="nit" size="25" required/></td>
				</tr>
				<tr>
					<td colspan="2"><b><center>Encargado</center></b></td>
				</tr>
				<tr>
					<td colspan="2"><center><input type="text" name="encargado" size="25"required /></center></td>
				</tr>
				<tr>
					<td><b>Telefono</b></td>
					<td><b>Email</b></td>
				</tr>
				<tr>
					<td><input type="text" name="telefono" size="25" required/></td>
					<td><input type="email" name="email" size="25"required /></td>
				</tr>
				
			</table></center>
			<p></p>
			<center><input type="submit" name="enviar" value="Registrar" /></center><p></p>
			<td >	
			<center><input type="reset" value="Vaciar datos"></center>
			</td><p></p>
			<center><a href="negocios.php">Atras</a></center><p></p>
			<center><a href="mempresas.php">Mostrar Empresas</a></center>
			<?php
			if (isset($_POST['submit'])) {
				require("empresanueva.php");
			}
		?>
				</div>
				</hgroup>
			</section>
		<footer>
			
		</footer>
	</body>
</html>
