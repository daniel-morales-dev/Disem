<?php
	require('conexion2.php');
	
	$query="SELECT id, codigo, producto, trabajador, dia, mes, anio, valor, valorm, unidades FROM productos";
	
	$resultado=$mysqli->query($query);
	
?>

<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/mirari.css">
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
					<li><a href="bienvenido.php">Inicio </a></li>
					<li><a href="cerrar_sesion.php">Cerrar Sesion</a></li>
				</ul>
			</nav>
			</header>
			<section>
				<div id="textopr">
					<hgroup>
						<center><h1>INVENTARIO</h1></center>
						<center><table border="1">
			<thead>
				<tr>
					<td><center><b>CODIGO</b></td></center>
					<td><center><b>PRODUCTO</b></td></center>
					<td><center><b>TRABAJADOR ENCARGADO</b></td></center>
					<td><center><b>FECHA</b></td></center>
					<td><center><b>VALOR POR UNIDAD</b></td></center>
					<td><center><b>VALOR AL POR MAYOR</b></td></center>
					<td><center><b>UNIDADES</b></td></center>
					<td><center><b>ELIMINAR</b></td></center>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
						<tr>
							<td><center><?php echo $row['codigo'];?></center>
							</td>
							<td><center><?php echo $row['producto'];?></center>
							</td>
							<td><center><?php echo $row['trabajador'];?></center>
							</td>
							<td><center><?php echo $row['dia'];?>
							de
							<?php echo $row['mes'];?>
							del
							<?php echo $row['anio'];?></center>
							</td>
							<td><center><?php echo $row['valor'];?></center>
							</td>
							<td><center><?php echo $row['valorm'];?></center>
							</td>
							<td><center><?php echo $row['unidades'];?></center>
							</td>
							<td>
								<center><a href="eliminarp.php?id=<?php echo $row['id'];?>">Eliminar</a></center>
							</td>
						</tr>
						
					<?php } ?>

				</tbody>
						
			</table><p></p>
			<center><a href="inventario.php"><h4><center>Atras</center></h4></a></center>
			<form> 
					<center><input type='button' onclick='window.print();' value='Imprimir' /></center>
					</form> <p></p>
			<center><a href="editarp.php"><h4><center>Editar Producto</center></h4></a></center>
					</hgroup>
				</div>
			</section>
		</div>
		<footer>
			
		</footer>
	</body>
</html>
