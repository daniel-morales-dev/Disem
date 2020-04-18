<?php
	require('conexion2.php');
	
	$query="SELECT id, usuario, email FROM registro";
	
	$resultado=$mysqli->query($query);
	
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/negociosa.css">
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
				
			}
		?>
		<div id="contenido">
			<header>
				<hgroup>
					<img src="imagenes/logo.png" width = "80"><h1>DISEM - Diseños Morales</h1>
				</hgroup>
				<nav>
				<ul>
					<li><a href="opciones.php">Inicio</a></li>
					<li><a href="cerrar_sesiona.php">Cerrar Sesion</a></li>
				</ul>
			</nav>
			</header>
			<section>
				<div id="textopr">
				<hgroup>
					<table width="100%" border="0">
						<tr>
							<td>
				<h1>Empresas</h1>
				<a href="empresasa.php"><img src="imagenes/edificios.png" width="200"></a>
				</div>
			</td>
	
			<td>
				<div id="comerciantes">
					<h1>Comerciantes</h1>
					<a href="comerciantesa.php"><img src="imagenes/hands.png" width="200"></a>
					</div>
					
					
				</div>
			</td>
			</tr>
			</table>
			<center><h4><a href="opciones.php">Atras</a></h4></center>
					</hgroup>
			</section>
		<footer>
			
		</footer>
	</body>
</html>
