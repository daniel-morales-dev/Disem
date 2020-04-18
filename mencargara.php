<?php
	require('conexion2.php');
	
	$query="SELECT id, producto, tipo, proveedor, unidades, dia, mes FROM encargos";
	
	$resultado=$mysqli->query($query);
	
?>

<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/mencargar.css">
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
					<li><a href="opciones.php">Opciones </a></li>
					<li><a href="inventarioa.php">Inventario </a></li>
					<li><a href="cerrar_sesion.php">Cerrar Sesion</a></li>
				</ul>
			</nav>
			</header>
			<section>
				<div id="textopr">
					<hgroup>
					<center><h1>PRODUCTOS ENCARGADOS</h1></center>
						<center><table border="1" width="100%">
			<thead>
				<tr>
					<td><center><b>PRODUCTO</b></td></center>
					<td><center><b>TIPO</b></td></center>
					<td><center><b>PROVEEDOR</b></td></center>
					<td><center><b>UNIDADES</b></td></center>
					<td><center><b>FECHA DE LLEGADA</b></td></center>
					<td><center><b>CANCELAR ENCARGO</b></td></center>
					<td><center><b>CONFIRMAR LLEGADA</b></td></center>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
						<tr>
							<td>
								<center><?php echo $row['producto'];?></center>
							</td>
							<td>
								<center><?php echo $row['tipo'];?></center>
							</td>
							<td>
								<center><?php echo $row['proveedor'];?></center>
							</td>
							<td>
								<center><?php echo $row['unidades'];?></center>
							</td>
							<td>
								<center><?php echo $row['dia'];?> de <?php echo $row['mes'];?></center>
							</td>
							<td>
								<center><a href="eliminara.php?id=<?php echo $row['id'];?>">Eliminar</a></center>
							</td>
							<td>
								<center><a href="confirmarea.php?id=<?php echo $row['id'];?>">Confirmar</a></center>
							</td>
						</tr>
						
					<?php } ?>
				</tbody>
			</table>
					<center><p></p>
					<form> 
					<center><input type='button' onclick='window.print();' value='Imprimir' /></center>
					</form> <p></p>
						<a href="encargara.php"><h4><center>Atras</center></h4></a>
					</center>
					</hgroup>
				</div>
			</section>
		</div>
		<footer>
			
		</footer>
	</body>
</html>
