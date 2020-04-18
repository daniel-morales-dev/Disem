<?php

$server = "localhost";
$usuario = "Daniel99";
$clave = "990711";
$bd = "proyecto";

$conexion =  mysqli_connect($server, $usuario, $clave, $bd) or die  ("Error en la conexion");

$factura=$_POST["factura"];
    $fecha=date("Y-m-d");
    $dia=$_POST["dia"];
    $mes=$_POST["mes"];
    $anio=$_POST["anio"];
    $vendedor=$_POST["vendedor"];
    $forma=$_POST["forma"];
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

$insertar = "INSERT into facturas values ('','$factura','$fecha','$dia','$mes','$anio','$vendedor','$forma','$comprador','$cedula','$direccion','$telefono','$codigo','$producto','$cantidad','$preciou','$net','$descuento','$resultado')";

$resultado = mysqli_query($conexion, $insertar);

      echo '<script>alert("Producto no Registrado")</script> ';
      echo "<script>location.href='facturacion.php'</script>";
    

mysqli_close($conexion);
echo '<script>alert("Factura Guardada")</script> ';
echo "<script>location.href='facturacion.php'</script>";

?>

