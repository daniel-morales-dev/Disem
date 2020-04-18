<?php

$server = "localhost";
$usuario = "Daniel99";
$clave = "990711";
$bd = "proyecto";

$conexion =  mysqli_connect($server, $usuario, $clave, $bd) or die  ("Error en la conexion");

$codigo = $_POST['codigo'];
$producto = $_POST['producto'];
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$numero3 = $_POST['numero3'];
$resultado = $_POST['resultado'];


$insertar = "INSERT into ganancias values ('','$codigo','$producto','$numero1','$numero2','$numero3','$resultado')";

$resultado = mysqli_query($conexion, $insertar)
 or die ("Error al registrar las ganancias");

mysqli_close($conexion);
echo '<script>alert("Ganancias registradas")</script> ';
echo "<script>location.href='vendidos.php'</script>";

?>

