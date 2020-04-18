
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/opciones.css">
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
				header("location: admin.php");
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
					
					<li><a href="cerrar_sesiona.php">Cerrar Sesion </a></li>

				</ul>
			</nav>
			</header>
			<section>
				<div id="textopr">
					<hgroup>
					<table width="100%" border="0">
					<tr>
					<td>
						<center><h1>Usuarios</h1></center>
						<center><a href="usuarios.php"><img src="imagenes/usuario.png" width="200"></a></center>
					</td>
				</div>
				<div id="administradores">
					<td>
					<center><h1>Administradores</h1></center>
					<center><a href="admins.php"><img src="imagenes/administrador.png" width="200"></a></center>
					</td>
				</div>
				</tr>
				<tr>
				<div id="empleados">
					<td>
					<center><h1>Negocios</h1></center>
				</div>
					<div id="negocios">
					<center><a href="negociosa.php"><img src="imagenes/hands.png" width="200"></a></center>
					</td>
				</div>
				</td>
				<td>
				<div id="inventario">
					<center><h1>Inventario</h1></center>
				</div>
				<div id="cajas">
					<center><a href="inventarioa.php"><img src="imagenes/inventario.png" width="200"></a></center>
				</div>
				</td>
				</tr>
				<tr>
					<td colspan="2">
					<div id="facturacion">
					<center><h1>Facturacion</h1></center>
					</div>
					<div id="factura">
					<center><a href="facturaciona.php"><img src="imagenes/factura.png" width="300"></a></center>
					</div>	
					</td>
				</tr>
					</table>
					</hgroup>
			</section>
		<footer>
			
		</footer>
	</body>
</html>