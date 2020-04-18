<?php

$server = "localhost";
$usuario = "Daniel99";
$clave = "990711";
$bd = "proyecto";

$conexion =  mysqli_connect($server, $usuario, $clave, $bd) or die  ("Error en la conexion");

$empresa = $_POST['empresa'];
$nit = $_POST['nit'];
$encargado = $_POST['encargado'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];

$insertar = "INSERT into empresas values ('','$empresa','$nit','$encargado','$telefono','$email')";

$resultado = mysqli_query($conexion, $insertar)
 or die ("<script>location.href='empresasa.php'</script>");

mysqli_close($conexion);
echo '<script>alert("Empresa registrada")</script> ';
echo "<script>location.href='empresasa.php'</script>";

?>

