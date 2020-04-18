<?php
	require('conexion2.php');
	
	$query="SELECT codigo, producto, trabajador, dia, mes, anio, valor, valorm, unidades FROM productos";
	
	$resultado=$mysqli->query($query);
	
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/encargar.css">
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
					<li><a href="bienvenido.php">Inicio </a></li>
					<li><a href="cerrar_sesion.php">Cerrar Sesion</a></li>
				</ul>
			</nav>
			</header>
			<section>
				<div id="textopr">
					<hgroup>
					<center><h1>ENCARGAR PRODUCTO</h1></center>
					<form action="encargarp1.php" method="POST">
						<table width="100%" border="0">
							<tr>
								<td>
									<h4>NOMBRE DEL PRODUCTO:</h4>
								</td>
								<td>
									<input type="text" size="30" name="producto" required></input>
								</td>
							</tr>
							<tr>
								<td>
									<h4>TIPO DE PRODUCTO:</h4>
								</td>
								<td>
									<input type="text" size="30" name="tipo" required></input>
								</td>
							</tr>
							<tr>
								<td>
									<h4>PROVEEDOR:</h4>
								</td>
								<td>
									<input type="text" size="30" name="proveedor" required></input>
								</td>
							</tr>
							<tr>
								<td>
									<h4>UNIDADES:</h4>
								</td>
								<td>
									<input type="text" size="30" name="unidades" required></input>
								</td>
							</tr>
							<tr>
								<td>
									<h4>FECHA PROPUESTA:</h4>
								</td>
								<td colspan="3">
							<select name="dia" required>
								<option>Dia</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>
							</select required>
								<select name="mes">
									<option>Mes</option><option>Enero</option><option>Febrero</option><option>Marzo</option><option>Abril</option><option>Mayo</option><option>Junio</option><option>Julio</option><option>Agosto</option><option>Septiembre</option><option>Octubre</option>
									<option>Noviembre</option><option>Diciembre</option>
								</select>
							</tr>
							<tr>
								<td>
									<center><input type="submit" value="Encargar"></input></center>
								</td>
								<td >
									<center><input type="reset" value="Vaciar datos"></center>
								</td>
							</tr>
						</table>
						<?php
						if (isset($_POST['submit'])) {
						require("encargarp1.php");
						}
						?>
					</form>
					<center>
						<a href="inventario.php"><h4><center>Atras</center></h4></a>
						<a href="mencargar.php"><h4><center>Productos encargados</center></h4></a>
					</center>
					</hgroup>
				</div>
			</section>
		</div>
		<footer>
			
		</footer>
	</body>
</html>
