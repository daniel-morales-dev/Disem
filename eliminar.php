<?php 
	
	require('conexion2.php');
	
	$id=$_GET['id'];
	
	$query="DELETE FROM encargos WHERE id='$id'";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/chao.css">
		<link href='https://fonts.googleapis.com/css?family=Russo+One' rel='stylesheet'>
		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script src="index2.js"></script>
			<title>Eliminar Encargo</title>
	</head>
	
	<body>
		<center>
			<?php 
				if($resultado>0){
				?>
				
				<h4>ENCARGO CANCELADO</h4>
				
				<?php 	}else{ ?>
				
				<h1>Error al cancelar el encargo</h1>
				
			<?php	} ?>
			<p></p>		
			
			<a href="mencargar.php">Regresar</a>
			
		</center>
	</body>
</html>