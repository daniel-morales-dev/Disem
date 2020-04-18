<?php

$server = "localhost";
$usuario = "Daniel99";
$clave = "990711";
$bd = "proyecto";

$conexion =  mysqli_connect($server, $usuario, $clave, $bd) or die  ("Error en la conexion");

$producto = $_POST['producto'];
$tipo = $_POST['tipo'];
$proveedor = $_POST['proveedor'];
$unidades = $_POST['unidades'];
$dia = $_POST['dia'];
$mes = $_POST['mes'];

$insertar = "INSERT into encargos values ('','$producto','$tipo','$proveedor','$unidades','$dia','$mes')";

$resultado = mysqli_query($conexion, $insertar)
 or die ("Error al registrar el producto");

mysqli_close($conexion);
echo '<script>alert("Producto encargado")</script> ';
echo "<script>location.href='encargar.php'</script>";

?>

