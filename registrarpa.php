
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/registrarp.css">
		<link href='https://fonts.googleapis.com/css?family=Russo+One' rel='stylesheet'>
		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script src="index2.js"></script>
			<title>DISEM</title>
	</head>
	<body><?php
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
					<li><a href="cerrar_sesiona.php">Cerrar Sesion </a></li>

				</ul>
			</nav>
			</header>
			<section>
				<div id="textopr">
					<hgroup>
						<center><h1>AÑADIR PRODUCTO</h1></center>
						<form action="rproductos.php" method="POST">
					<center><table border="0">
						<tr>
							<td>
								<h4>CODIGO:</h4>
							</td>
							<td>
								<h4>PRODUCTO:</h4>
							</td>
						</tr>
						<tr>
							<td>
								<input type="text" name="codigo" size="25" required></input>
							</TD>
							<TD colspan="3">
								<input type="text" name="producto" size="25" required></input>
							</TD>
						</tr>
						<tr>
							<td>
								<h4>TRABAJADOR ENCARGADO:</h4>
							</td>
							<td>
								<input type="text" name="trabajador" size="25" required></input>
							</TD>
						</tr>
						<tr>
							<td>
							<h4>FECHA DE ENTRADA:</h4>
							</td>
							<td colspan="3">
							<select name="dia" required>
								<option>Dia</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>
							</select>
								<select name="mes" required>
									<option>Mes</option><option>Enero</option><option>Febrero</option><option>Marzo</option><option>Abril</option><option>Mayo</option><option>Junio</option><option>Julio</option><option>Agosto</option><option>Septiembre</option><option>Octubre</option>
									<option>Noviembre</option><option>Diciembre</option>
								</select>
								<select name="anio" required>
									<option>Año</option><option>2000</option><option>2001</option><option>2002</option><option>2003</option><option>2004</option><option>2005</option><option>2006</option><option>2007</option><option>2008</option><option>2009</option><option>2010</option><option>2011</option><option>2012</option><option>2013</option><option>2014</option><option>2015</option><option>2016</option><option>2017</option><option>2018</option><option>2019</option><option>2020</option><option>2021</option><option>2022</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								<h4>VALOR POR UNIDAD:</h4>
							</td>
							<td>
								<h4>VALOR AL POR MAYOR:</h4>
							</td>
						</tr>
						<tr>
							<td>
								<input type="text" name="valor" size="25" required></input>
							</TD>
							<td>
								<input type="text" name="valorm" size="25" ></input>
							</TD>
						</tr>
						<tr>
							<td>
								<h4>UNIDADES:</h4>
							</td>
							<td>
								<input type="text" name="unidades" size="25" required></input>
							</TD>
						</tr>	
						<tr>
							<td>
								<center><input type="submit" value="Registrar"></input></center>
							</td>
							<td colspan="3">
								<center><input type="reset" value="Vaciar datos"></center>
							</td>
						</tr>
						<tr>
							<td colspan="3">
								<a href="inventarioa.php"><h4><center>Atras</center></h4></a>
							</td>
						</tr>
					</table>
					<?php
			if (isset($_POST['submit'])) {
				require("rproductos.php");
			}
		?>
					</form>
					</center>
					</hgroup>
				</div>
			</section>
		<footer>
			
		</footer>
	</body>
</html>