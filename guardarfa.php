<?php

$server = "localhost";
$usuario = "Daniel99";
$clave = "990711";
$bd = "proyecto";

$conexion =  mysqli_connect($server, $usuario, $clave, $bd) or die  ("Error en la conexion");

$factura=$_POST["factura"];
    $fecha=date("Y-m-d");
    $vendedor=$_POST["vendedor"];
    $comprador=$_POST["comprador"];
    $cedula=$_POST["cedula"];
    $direccion=$_POST["direccion"];
    $telefono=$_POST["telefono"];
    $codigo=$_POST["codigo"];
    $producto=$_POST["producto"];
    $cantidad=$_POST["cantidad"];
    $preciou=$_POST["preciou"];
    $net=$_POST["net"];
    $descuento=$_POST["descuento"];
    $resultado=$_POST["resultado"];

$insertar = "INSERT into facturas values ('','$factura','$fecha','$vendedor','$comprador','$cedula','$direccion','$telefono','$codigo','$producto','$cantidad','$preciou','$net','$descuento','$resultado')";

$resultado = mysqli_query($conexion, $insertar)
 or die ("Error al guardar la factura");

mysqli_close($conexion);
echo '<script>alert("Factura Guardada")</script> ';
echo "<script>location.href='facturaciona.php'</script>";

?>

