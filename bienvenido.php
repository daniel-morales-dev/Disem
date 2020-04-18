
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/bienvenido.css">
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
				echo '<script>alert("Clave o Usuario Incorrecto")</script> ';
			}
		?>	
		<div id="contenido">
			<header>
				<hgroup>
					<img src="imagenes/logo.png" width = "80"><h1>DISEM - Diseños Morales</h1>
				</hgroup>
				<nav>
				<ul>
					<li><a href="cerrar_sesion.php">Cerrar Sesion</a></li>
					
				</ul>
			</nav>
			</header>
			<section>
				
				<div id="textopr">
					<table width="100%" border="0">
					<tr>
						<td>
					<div id="empleados">
					<center><h1>Empleados</h1></center>
					</div>
					<div id="conference">
					<center><a href="empleados.php"><img src="imagenes/conference.png" width="200"></a></center>
					</div>
					</td>
						<td>
					<div id="compradores">
					<center><h1>Negocios</h1></center>
					<center><a href="negocios.php"><img src="imagenes/hands.png" width="200"></a></center>
					</div>
					</td>
				</tr>
				<tr>
					<td>
					<div id="inventario">
						<center><h1>Inventario</h1></center>
					</div>
					<div id="cajas">
						<center><a href="inventario.php"><img src="imagenes/inventario.png" width="200"></a></center>
					</div>
					</td>
					<td>
					<div id="facturacion">
						<center><h1>Facturacion</h1></center>
					</div>
					<div id="factura">
						<center><a href="facturacion.php"><img src="imagenes/factura.png" width="270"></a></center>
					</div>
					</hgroup>
				</div>
			</td>
				</tr>
			</table>
			</section>	
			
		</div>
		<?php

		?>
		<footer>
			
		</footer>
	</body>
</html>
