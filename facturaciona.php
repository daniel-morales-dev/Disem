<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/factura.css">
		<link href='https://fonts.googleapis.com/css?family=Russo+One' rel='stylesheet'>
		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script src="index2.js"></script>
			<title>DISEM</title>
			<script> 
			function sumar() { 
			var n1 = parseInt(document.MyForm.cantidad.value); 
			var n2 = parseInt(document.MyForm.preciou.value); 
			document.MyForm.net.value=n1*n2; 
			} 
			</script>
			<script> 
			function sumar1() { 
			var n1 = parseInt(document.MyForm.cantidad1.value); 
			var n2 = parseInt(document.MyForm.preciou1.value); 
			document.MyForm.net1.value=n1*n2; 
			} 
			</script> 
			<script> 
			function sumar2() { 
			var n1 = parseInt(document.MyForm.cantidad2.value); 
			var n2 = parseInt(document.MyForm.preciou2.value); 
			document.MyForm.net2.value=n1*n2; 
			} 
			</script> 
			<script> 
			function sumar3() { 
			var n1 = parseInt(document.MyForm.cantidad3.value); 
			var n2 = parseInt(document.MyForm.preciou3.value); 
			document.MyForm.net3.value=n1*n2; 
			} 
			</script> 
			<script> 
			function sumar4() { 
			var n1 = parseInt(document.MyForm.cantidad4.value); 
			var n2 = parseInt(document.MyForm.preciou4.value); 
			document.MyForm.net4.value=n1*n2; 
			} 
			</script> 
			<script> 
			function netario() { 
			var n1 = parseInt(document.MyForm.net.value); 
			var n2 = parseInt(document.MyForm.net1.value);
			var n3 = parseInt(document.MyForm.net2.value); 
			var n4 = parseInt(document.MyForm.net3.value);
			var n5 = parseInt(document.MyForm.net4.value);   
			document.MyForm.totalnet.value=n1+n2+n3+n4+n5; 
			} 
			</script> 
			<script> 
			function descontar() { 
			var n1 = parseInt(document.MyForm.totaliva.value); 
			var n2 = parseInt(document.MyForm.descuento.value); 
			document.MyForm.totaldescuento.value=n1*n2/100; 
			} 
			</script>
			<script> 
			function iva1() { 
			var n1 = parseInt(document.MyForm.totalnet.value); 
			document.MyForm.iva.value=n1*16/100; 
			} 
			</script>
			<script> 
			function totaliva1() { 
			var n1 = parseInt(document.MyForm.totalnet.value); 
			var n2 = parseInt(document.MyForm.iva.value); 
			document.MyForm.totaliva.value=n1+n2; 
			} 
			</script>
			<script> 
			function total() { 
			var n1 = parseInt(document.MyForm.totalnet.value); 
			var n2 = parseInt(document.MyForm.totaldescuento.value);
			document.MyForm.resultado.value=n1+(n1*0.16)-n2; 
			} 
			</script> 
			<script type="text/javascript">
			function imprimir(destino){
				document.MyForm.action = destino;
				document.MyForm.submit();
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
					<li><a href="cerrar_sesiona.php">Cerrar Sesion</a></li>
				</ul>
			</nav>
			</header>
			<section>
				<div id="textopr">
					<hgroup>
						<center><h1>FACTURACION</h1></center>
				<tbody>	
						
<form name="MyForm"  method="post" action="generador.php">
<center>
<table border="0" width="100%">
						<tr>
							<td>
								<h4><left>Factura N°:</left></h4>
							</td>
							<td colspan="0"><input type="text" name="factura" required>
							</td>
							<td><h4><rigth>Fecha de Expedicion:</rigth></h4></td>
							<td colspan="0">
								<input name="date" type="date" id="fecha" size="10"  value="<?php echo date("Y/M/d"); ?>" required/>
							</td>
						</tr>
						
<tr>
							<td>
								<h4>Vendedor Encargado:</h4>
							</td>
							<td colspan="0"><input type="text" name="vendedor" required></td>
							<td>
								<h4>Cedula:</h4>
							</td>
							<td colspan="0"><input type="text" name="cedulaven" required></td>
<tr>
							<td colspan="0">
								<h4><left>Comprador:</left></h4>
							</td>
							<td colspan="0"><input type="text" name="comprador" required></td>
							<td colspan="0">
								<h4><left>NIT/C.C:</left></h4>
							</td>
							<td colspan="0"><input type="text" name="cedula" required></td>
						</tr>
						<tr>
							<td colspan="0">
								<h4><left>Direccion:</left></h4>
							</td>
							<td colspan="0"><input type="text" name="direccion" required></td>
							<td colspan="0">
								<h4><left>Telefono:</left></h4>
							</td>
							<td colspan="0"><input type="text" name="telefono" required></td>
						</tr>
<tr>
<td><b>Codigo:</b></td>
<td><b>Producto:</b></td>
<td><b>Cantidad:</b></td>
<td><b>Precio x Unidad:</b></td>
<td><b>Precio Netario:</b></td>
</tr>
<td><input type="text" name="codigo" required/></td>


<td><input type="text" name="producto" required/></td>
	
	<td><input type="text" name="cantidad" required/></td>
	
	<td><input type="text" name="preciou" required/></td>
	<td><input type="text" name="net" required></td>
	<td colspan="0">
	<div align="left"><input type="button" value="Netario" onclick="sumar()"></div> 
</td>
</tr>
<tr>
<td><b>Codigo:</b></td>
<td><b>Producto:</b></td>
<td><b>Cantidad:</b></td>
<td><b>Precio x Unidad:</b></td>
<td><b>Precio Netario:</b></td>
</tr>
<td><input type="text" name="codigo1" required/></td>


<td><input type="text" name="producto1" required/></td>
	
	<td><input type="text" name="cantidad1" required/></td>
	
	<td><input type="text" name="preciou1" required/></td>
	<td><input type="text" name="net1" required></td>
	<td colspan="0">
	<div align="left"><input type="button" value="Netario" onclick="sumar1()"></div> 
</td>
</tr>
<tr>
<td><b>Codigo:</b></td>
<td><b>Producto:</b></td>
<td><b>Cantidad:</b></td>
<td><b>Precio x Unidad:</b></td>
<td><b>Precio Netario:</b></td>
</tr>
<td><input type="text" name="codigo2" required/></td>


<td><input type="text" name="producto2" required/></td>
	
	<td><input type="text" name="cantidad2" required/></td>
	
	<td><input type="text" name="preciou2" required/></td>
	<td><input type="text" name="net2" required></td>
	<td colspan="0">
	<div align="left"><input type="button" value="Netario" onclick="sumar2()"></div> 
</td>
</tr>
<tr>
<td><b>Codigo:</b></td>
<td><b>Producto:</b></td>
<td><b>Cantidad:</b></td>
<td><b>Precio x Unidad:</b></td>
<td><b>Precio Netario:</b></td>
</tr>
<td><input type="text" name="codigo3" required/></td>


<td><input type="text" name="producto3" required/></td>
	
	<td><input type="text" name="cantidad3" required/></td>
	
	<td><input type="text" name="preciou3" required/></td>
	<td><input type="text" name="net3" required></td>
	<td colspan="0">
	<div align="left"><input type="button" value="Netario" onclick="sumar3()"></div> 
</td>
</tr>
<tr>
<td><b>Codigo:</b></td>
<td><b>Producto:</b></td>
<td><b>Cantidad:</b></td>
<td><b>Precio x Unidad:</b></td>
<td><b>Precio Netario:</b></td>
</tr>
<td><input type="text" name="codigo4" required/></td>


<td><input type="text" name="producto4" required/></td>
	
	<td><input type="text" name="cantidad4" required/></td>
	
	<td><input type="text" name="preciou4" required/></td>
	<td><input type="text" name="net4" required></td>
	<td colspan="0">
	<div align="left"><input type="button" value="Netario"  onclick="sumar4()"></div> 
</td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td><b>Total Netario:</b></td>
</tr>
<tr>
<td></td>
<td><b>IVA:</b></td>
<td></td>
<td><b>Total Netario mas IVA:</b></td>
<td><input type="text" name="totalnet" required></td>
<td><div align="left"><input type="button" value="Total Netario" onclick="netario()"></div> </td>
</tr>

<tr>
	<td>
		<b>IVA(16%) </b>
	</td>
	<td>
		<input type="text" name="iva" size="20" required></input>
	</td>
	<td><div align="left"><input type="button" value="IVA" onclick="iva1()"></div> </td>
	<td>
		<input type="text" name="totaliva" size="20" required></input>
	</td>
	<td><div align="left"><input type="button" value="Total IVA" onclick="totaliva1()"></div> </td>
</tr>
<tr>
	<td>
	<b>Descuento Comercial(%):</b>
	</td>
	<td>
	<b>Total Descuentos:</b>
	</td>
	<td></td>

</tr>
<tr>
	<td>
		<input type="text" name="descuento" size="20" required></input>
	</td>
	<td>
		<input type="text" name="totaldescuento" size="20" required></input>
	</td>
	<td colspan="0">
	<div align="left"><input type="button" value="Descuento" onclick="descontar()"></div> 
	</td>
</tr>
<tr>
	<td>
		<b>Total:</b>
	</td>
	<td>
		<input type="text" name="resultado" size="20" required> 
	</td>
	<td colspan="0">
	<div align="left"><input type="button" value="Total" onclick="total()"></div> 
	</td>
<td colspan="0">
<center><input type="reset" value="Vaciar datos"></center>
</td>
	<td colspan="0">
		<center><input type="submit" value="Generar Factura"/></center>
	</td>
</tr>
</table>

</center>
</form>
				</tbody>	
				</form>		
				<center>
					<p>
					<a href="opciones.php">Atras</a></p>
					</center>
					</tbody>
					</hgroup>
			</section>
		<footer>
			
		</footer>
	</body>
</html>