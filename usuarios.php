<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/usuarios.css">
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
					<li><a href="opciones.php">Inicio </a></li>
					<li><a href="cerrar_sesiona.php">Cerrar Sesion </a></li>
				</ul>
			</nav>
			</header>
			<section>
				<div id="textopr">
					<hgroup>
						<center><h1>Usuarios</h1></center>
				<tbody>
					<?php
$var="";
$var1="";
$var2="";
$var3="";
$var4="";

if(isset($_POST["btn1"])){
	$btn=$_POST["btn1"];
	$bus=$_POST["txtbus"];
	if($btn=="Buscar"){
		
		$sql="select * from registro where id='$bus'";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var3=$resul[3];
			$var4=$resul[4];
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
		$sql="insert into registro values ('$usuario','$password','$email','$rpassword','$id')";
		
		$cs=mysql_query($sql,$cn);
		echo "<script> alert('Se guardo correctamente');</script>";
		}
		if($btn=="Actualizar"){
		$usuario=$_POST["usuario"];
		$password=$_POST["password"];
		$email=$_POST["email"];
		$rpassword=$_POST["rpassword"];
		$id=$_POST["id"];
		
		$sql="update registro set usuario='$usuario',password='$password',email='$email',rpassword='$rpassword' where id='$id'";
		
		$cs=mysql_query($sql,$cn);
		echo "<script> alert('Se actualizo correctamente');</script>";
		}
		
		if($btn=="Eliminar"){
		$id=$_POST["id"];
			
		$sql="delete from registro where id='$id'";
		
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
<td colspan="0"><center><input type="text" name="txtbus" placeholder="Ingrese ID" ></center></td>
<td colspan="2"><center><input type="submit" name="btn1"  value="Buscar"/></center></td>
</tr>
<tr>
<td><b>Id:</b></td>
<td><input type="text" name="id"  value="<?php echo $var4?>" /></td>
</tr>
<tr>
<td><b>Usuario:</b></td>
<td><input type="text" name="usuario" value="<?php echo $var?>" /></td>
</tr>
<tr>
<td><b>Password:</b></td>
<center><td><b>Repetir password:</b></td>
</center>
<tr>
<td><input type="password" name="password"  value="<?php echo $var1?>" /></td>
<td><input type="password" name="rpassword"  value="<?php echo $var3?>" /></td></center>
</tr>
<tr>
<td><b>Email:</b></td>
<td><input type="text" name="email"  value="<?php echo $var2?>" /></td>
</tr>
</tr>

<tr align="center">
<td >
<center><input type="reset" value="Vaciar datos"></center>
</td>
<td colspan="5">
<input type="submit" name="btn1" value="Listar"/>
<tr align="center"><td colspan="5"><input type="submit" name="btn1" value="Actualizar"/>
<input type="submit" name="btn1"value="Eliminar"/>
<input type="submit" name="btn1"value="Agregar"/></td></tr>

</table>

</center>
<br />
</form>
<br />



<?php
if(isset($_POST["btn1"])){
	$btn=$_POST["btn1"];

	if($btn=="Listar"){
	
		$sql="select * from registro";
		$cs=mysql_query($sql,$cn);
		echo "<script>location.href='mostraru.php'</script>";
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
					
					<a href="opciones.php">Atras</a></p>
					</center>
					</hgroup>
				</div>
			</section>
		</div>
		<footer>
			
		</footer>
	</body>
</html>
