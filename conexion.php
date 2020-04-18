<?php
$cn=mysqli_connect("localhost","root","")or die("Error en Conexion");
$db=mysqli_select_db($cn,"proyecto")or die("Error en Db");
return($cn);
return($db);
?>