
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/inventario.css">
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
					<li><a href="cerrar_sesion.php">Cerrar Sesion </a></li>

				</ul>
			</nav>
			</header>
			<section>
				<div id="textopr">
					<hgroup>
						<center><h1>OPCIONES DE INVENTARIO</h1></center>
					<center><table border="0">
						<tr>
							<td>
								<center><h4>AÑADIR PRODUCTO</h4></center>
							</td>
							<td>
								<center><h4>MIRAR INVENTARIO</h4></center>
							</td>
						</tr>
						<tr>
							<td>
								<a href="registrarp.php"><center><img src="imagenes/producto.png" width="150"></center></a>
							</td>
							<td>
								<a href="mirari.php"><center><img src="imagenes/mirari.png" width="150"></center></a>
							</td>
						</tr>
						<tr>
							<td>
								<center><h4>ENCARGAR PRODUCTO</h4></center>
							</td>
							<td>
								<center><h4>GANANCIA DE PRODUCTO</h4></center>
							</td>
						</tr>
						<tr>
							<td>
								<a href="encargar.php"><center><img src="imagenes/encargar.png" width="150"></center></a>
							</td>
							<td>
								<a href="vendidos.php"><center><img src="imagenes/vender.png" width="150"></center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<a href="bienvenido.php"><h4><center>Atras</center></h4></a>
							</td>
						</tr>
					</table>
					</center>
					</hgroup>
				</div>
			</section>
		<footer>
			
		</footer>
	</body>
</html>