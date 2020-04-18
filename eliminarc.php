<?php 
	
	require('conexion2.php');
	
	$id=$_GET['id'];
	
	$query="DELETE FROM clientes WHERE id='$id'";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Eliminar Cliente</title>
	</head>
	
	<body>
		<center>
			<?php 
				if($resultado>0){
				?>
				
				<h4>CLIENTE ELIMINADO</h4>
				
				<?php 	}else{ ?>
				
				<h1>Error al eliminar Cliente</h1>
				
			<?php	} ?>
			<p></p>		
			
			<a href="mclientesa.php">Regresar</a>
			
		</center>
	</body>
</html>