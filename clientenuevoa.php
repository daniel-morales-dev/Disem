<?php

$server = "localhost";
$usuario = "Daniel99";
$clave = "990711";
$bd = "proyecto";

$conexion =  mysqli_connect($server, $usuario, $clave, $bd) or die  ("Error en la conexion");

$nombre = $_POST['nombre'];
$cedula = $_POST['cedula'];
$negocio = $_POST['negocio'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];

$insertar = "INSERT into clientes values ('','$nombre','$cedula','$negocio','$telefono','$email','$edad','$sexo')";

$resultado = mysqli_query($conexion, $insertar)
 or die ("Error al registrar el cliente");

mysqli_close($conexion);
echo '<script>alert("Cliente Registrado")</script> ';
echo "<script>location.href='comerciantesa.php'</script>";

?>

