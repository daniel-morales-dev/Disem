<?php
	require('conexion2.php');
	
	$query="SELECT id, usuario, email, password FROM registro";
	
	$resultado=$mysqli->query($query);
	
?>
<?
  session_start();  
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/empleados.css">
		<link href='https://fonts.googleapis.com/css?family=Russo+One' rel='stylesheet'>
		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script src="index2.js"></script>
			<title>DISEM</title>
	</head>
	<body>
		<div id="contenido">
			<header>
				<hgroup>
					<img src="imagenes/logo.png" width = "80"><h1>DISEM - Diseños Morales</h1>
				</hgroup>
				<nav>
				<ul>
					<li><a href="ingreso.php">Cerrar Sesion </a></li>
				
				</ul>
			</nav>
			</header>
			<section>
				<div id="textopr">
					<hgroup>
						<h1>Usuarios</h1>
						<table border=1 width="80%">
			<thead>
				<tr>
					<td><b>Id</b></td>
					<td><b>Usuario</b></td>
					<td><b>Email</b></td>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
						<tr>
							<td><?php echo $row['id'];?>
							</td>
							<td><?php echo $row['usuario'];?>
							</td>
							<td>
								<?php echo $row['email'];?>
							</td>
						</tr>
						
					<?php } ?>
				</tbody>
			</table><p>
							

				
					<a href="opciones.php"><img src="imagenes/atras.png" width="90">
					</hgroup>
				</div>
			</section>
		</div>
		<footer>
			
		</footer>
	</body>
</html>
