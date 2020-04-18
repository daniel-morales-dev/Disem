<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/vendidos.css">
		<link href='https://fonts.googleapis.com/css?family=Russo+One' rel='stylesheet'>
		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script src="index2.js"></script>
			<title>DISEM</title>
			<script> 
			function sumar() { 
			var n1 = parseInt(document.MyForm.numero1.value); 
			var n2 = parseInt(document.MyForm.numero2.value); 
			var n3 = parseInt(document.MyForm.numero3.value); 
			document.MyForm.resultado.value=n1*n2*(0.16)*(n3/100); 
			} 
			</script> 
			<script type="text/javascript">
			function guardar(destino){
				document.MyForm.action = destino;
				document.MyForm.submit();
			}
			</script>
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
					<li><a href="opciones.php">Inicio </a></li>
					<li><a href="cerrar_sesiona.php">Cerrar Sesion</a></li>
				</ul>
			</nav>
			</header>
			<section>
				<div id="textopr">
					<hgroup>
						<center><h1>GANANCIA DE PRODUCTO</h1></center>
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
	}

?>
<form name="MyForm"  method="post">
<center>
<table border="0">
<tr>
<td colspan="4"><center><b>BUSCAR</b></center></td>
</tr>
<tr>
<td colspan="0"><center><input type="text" name="txtbus" placeholder="Ingrese CODIGO"></center></td>
<td colspan="2"><center><input type="submit" name="btn1"  value="Buscar"/></center></td>
</tr>
<tr>
<td><b>CODIGO:</b></td>
<td><input type="text" name="codigo" value="<?php echo $var1?>" /></td>
</tr>
<tr>
<td><b>PRODUCTO:</b></td>
<td><input type="text" name="producto" value="<?php echo $var2?>" /></td>
</tr>
<tr>
	<td>
		<b>UNIDADES:</b>
	</td>
	<td><input type="text" name="numero1"  value="<?php echo $var9?>" /></td>
</tr>
<tr>
	<td>
		<b>VALOR X UNIDAD:</b>
	</td>
	<td><input type="text" name="numero2"  value="<?php echo $var7?>" /></td>
</tr>
<tr>
	<td>
		<b>IVA:</b>
	</td>
	<TD><center><b>16%</b></center></TD>
</tr>
<tr>
	<td>
	<b>DESCUENTO (%):</b>
	</td>
	<td>
		<input type="text" name="numero3" size="20" ></input>
	</td>
</tr>
<tr>
	<td>
		<b>GANANCIAS:</b>
	</td>
	<td>
		<input type="text" name="resultado" size="20"> 
	</td>
</tr>
<tr align="center">
<td >
<center><input type="button" value="Guardar" onClick="guardar('rganancias.php')" ></center>
</td>
<td>
	<input type="button" value="Total" onclick="sumar()"> 
</td>
</table>

</center>
<br />
</form>
<br />



				</tbody>	
				</form>
				<p></p>
					<center>
					
					<a href="inventario.php">Atras</a></p>
					</center>
					</hgroup>
				</div>
			</section>
		</div>
		<footer>
			
		</footer>
	</body>
</html>
