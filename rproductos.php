<?php

$server = "localhost";
$usuario = "Daniel99";
$clave = "990711";
$bd = "proyecto";

$conexion =  mysqli_connect($server, $usuario, $clave, $bd) or die  ("Error en la conexion");

$codigo = $_POST['codigo'];
$producto = $_POST['producto'];
$trabajador = $_POST['trabajador'];
$dia = $_POST['dia'];
$mes = $_POST['mes'];
$año = $_POST['anio'];
$valor = $_POST['valor'];
$valorm = $_POST['valorm'];
$unidades = $_POST['unidades'];

$insertar = "INSERT into productos values ('','$codigo','$producto','$trabajador','$dia','$mes','$año','$valor','$valorm','$unidades')";

$resultado = mysqli_query($conexion, $insertar)
 or die ("Error al registrar el producto");

mysqli_close($conexion);
echo '<script>alert("Producto añadido")</script> ';
echo "<script>location.href='registrarpa.php'</script>";

?>

