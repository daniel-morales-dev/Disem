<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/editarp.css">
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
					<li><a href="bienvenido.php">Inicio </a></li>
					<li><a href="inventario.php">Inventario </a></li>
					<li><a href="cerrar_sesion.php">Cerrar Sesion </a></li>
				</ul>
			</nav>
			</header>
			<section>
				<div id="textopr">
					<hgroup>
						<center><h1>EDITAR PRODUCTOS</h1></center>
				<tbody>
					<?php
$var="";
$var1="";
$var2="";
$var3="";
$var4="";
$var5="";
$var6="";
$var7="";
$var8="";
$var9="";

if(isset($_POST["btn1"])){
	$btn=$_POST["btn1"];
	$bus=$_POST["txtbus"];
	if($btn=="Buscar"){
		
		$sql="select * from productos where codigo='$bus'";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var3=$resul[3];
			$var4=$resul[4];
			$var5=$resul[5];
			$var6=$resul[6];
			$var7=$resul[7];
			$var8=$resul[8];
			$var9=$resul[9];
			}
			
		}
		
		if($btn=="Nuevo"){
		
		$sql="select count(id),Max(id) from registro";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$count=$resul[0];
			$max=$resul[1];
			}
			if($count==0){
				$var4="A0001";
				}
				else{
					$var4='A'.substr((substr($max,1)+10001),1);
					}
			
		}
		if($btn=="Agregar"){
		$usuario=$_POST["usuario"];
		$password=$_POST["password"];
		$email=$_POST["email"];
		$rpassword=$_POST["rpassword"];
		$id=$_POST["id"];
		$sql="insert into productos values ('$usuario','$password','$email','$rpassword','$id')";
		
		$cs=mysql_query($sql,$cn);
		echo "<script> alert('Se guardo correctamente');</script>";
		}
		if($btn=="Actualizar"){
		$codigo=$_POST["codigo"];
		$producto=$_POST["producto"];
		$trabajador=$_POST["trabajador"];
		$dia=$_POST["dia"];
		$mes=$_POST["mes"];
		$anio=$_POST["anio"];
		$valor=$_POST["valorm"];
		$valorm=$_POST["valorm"];
		$unidades=$_POST["unidades"];
		
		$sql="update productos set codigo='$codigo',producto='$producto',trabajador='$trabajador',dia='$dia',mes='$mes',anio='$anio',valor='$valor',valorm='$valorm',unidades='$unidades' where codigo='$codigo'";
		
		$cs=mysql_query($sql,$cn);
		echo "<script> alert('Se actualizo correctamente');</script>";
		}
		
		if($btn=="Eliminar"){
		$id=$_POST["id"];
			
		$sql="delete from productos where id='$id'";
		
		$cs=mysql_query($sql,$cn);
		echo "<script> alert('Se elimino correctamente');</script>";
		}
	}

?>
<form name="fe" action="" method="post">
<center>
<table border="0">
<tr>
<td colspan="4"><center><b>Buscar</b></center></td>
</tr>
<tr>
<td colspan="0"><center><input type="text" name="txtbus" placeholder="Ingrese CODIGO"></center></td>
<td colspan="2"><center><input type="submit" name="btn1"  value="Buscar"/></center></td>
</tr>
<tr>
<td><b>CODIGO:</b></td>
<td><input type="text" name="codigo"  value="<?php echo $var1?>"/></td>
</tr>
<tr>
<td><b>PRODUCTO:</b></td>
<td><input type="text" name="producto" value="<?php echo $var2?>" /></td>
</tr>
<tr>
<td><b>TRABAJADOR ENCARGADO:</b></td>
<td><input type="text" name="trabajador"  value="<?php echo $var3?>"/></td>
</tr>
<tr>
<td><b>FECHA:</b></td>
<td>						<select name="dia">
								<option><?php echo $var4?></option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>
							</select>
								<select name="mes">
									<option><?php echo $var5?></option><option>Enero</option><option>Febrero</option><option>Marzo</option><option>Abril</option><option>Mayo</option><option>Junio</option><option>Julio</option><option>Agosto</option><option>Septiembre</option><option>Octubre</option>
									<option>Noviembre</option><option>Diciembre</option>
								</select>
								<select name="anio">
									<option><?php echo $var6?></option><option>2000</option><option>2001</option><option>2002</option><option>2003</option><option>2004</option><option>2005</option><option>2006</option><option>2007</option><option>2008</option><option>2009</option><option>2010</option><option>2011</option><option>2012</option><option>2013</option><option>2014</option><option>2015</option><option>2016</option><option>2017</option><option>2018</option><option>2019</option><option>2020</option><option>2021</option><option>2022</option>
								</select></td>
</tr>
<tr>
	<td>
		<b>VALOR POR UNIDAD:</b>
	</td>
	<td><input type="text" name="valor"  value="<?php echo $var7?>"/></td>
</tr>
<tr>
	<td>
		<b>VALOR AL POR MAYOR:</b>
	</td>
	<td><input type="text" name="valorm"  value="<?php echo $var8?>"/></td>
</tr>
<tr>
	<td>
		<b>UNIDADES:</b>
	</td>
	<td><input type="text" name="unidades"  value="<?php echo $var9?>"/></td>
</tr>
<tr align="center">
<td >
<center><input type="reset" value="Vaciar datos"></center>
</td>
<td colspan="5">
<input type="submit" name="btn1" value="Listar"/>
<tr align="center"><td colspan="5"><input type="submit" name="btn1" value="Actualizar"/>
</table>

</center>
<br />
</form>
<br />



<?php
if(isset($_POST["btn1"])){
	$btn=$_POST["btn1"];

	if($btn=="Listar"){
	
		$sql="select * from productos";
		$cs=mysql_query($sql,$cn);
		echo "<script>location.href='mirari.php'</script>";
		echo"<center>
<table border='3'>
<tr>
<td>Usuario</td>
<td>Password</td>
<td>Email</td>
<td>Rpassword</td>
<td>Id</td>
</tr>";
		while($resul=mysql_fetch_array($cs)){
			$var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var3=$resul[3];
			$var4=$resul[4];
			echo "<tr>
<td>$var</td>
<td>$var1</td>
<td>$var2</td>
<td>$var3</td>
<td>$var4</td>
</tr>";
			}
			
			echo "</table>
</center>";
	}
	}
?>
				</tbody>
			</table><p>
							
					<center>
					
					<a href="mirari.php">Atras</a></p>
					</center>
					</hgroup>
				</div>
			</section>
		</div>
		<footer>
			
		</footer>
	</body>
</html>
