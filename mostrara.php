<?php
	require('conexion2.php');
	
	$query="SELECT id, usuario, email, password FROM admin";
	
	$resultado=$mysqli->query($query);
	
?>

<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/hola.css">
		<link href='https://fonts.googleapis.com/css?family=Russo+One' rel='stylesheet'>
		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script src="index2.js"></script>
			<title>DISEM</title>
	</head>
	<script type="text/javascript" lenguage="javascript">
	function printDiv(divID){
		var divElements = document.getElementById(divID).innerHTML;

		var oldpage = document.body.innerHTML;

		document.body.innerHTML =

		"<html><head><title></tittle></head><body>" +
		divElements + "</body>";

		window.print();

		document.body.innerHTML = oldpage;
	}

	</script>
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
					<li><a href="opciones.php">Inicio </a></li>
					<li><a href="admins.php">Administradores </a></li>
					<li><a href="cerrar_sesiona.php">Cerrar Sesiona </a></li>
				</ul>
			</nav>
			</header>
			<section>
				<div id="textopr">
					<hgroup>
						<center><h1>ADMINISTRADORES</h1></center>
						<center><table border="1" width="100%">
			<thead>
				<tr>
					<td><center><b>ID</b></td></center>
					<td><center><b>USUARIO</b></td></center>
					<td><center><b>EMAIL</b></td></center>
					<td><center><b>PASSWORD</b></td></center>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
						<tr>
							<td>
								<center><?php echo $row['id'];?></center>
							</td>
							<td>
								<center><?php echo $row['usuario'];?></center>
							</td>
							<td>
								<center><?php echo $row['email'];?></center>
							</td>
							<td>
								<center><?php echo $row['password'];?></center>
							</td>
						</tr>
						
					<?php } ?>
				</tbody>
			</table><p>
			</p>
			</center>
			<form> 
					<center><input type='button' onclick='window.print();' value='Imprimir' /></center>
					</form> <p></p>
					<center><a href="admins.php">Atras</a></p></center>
					</hgroup>
				</div>
			</section>
		</div>
		<footer>
			
		</footer>
	</body>
</html>
