  </script>
	<title></title>
</head>
<body>

</body>
</html>

<?php
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
	$rpassword = $_POST['rpassword'];
	$email = $_POST['email'];
	$reqlen = strlen($usuario) * strlen($password) * strlen($rpassword);
	if ($reqlen > 0) {
		if ($password === $rpassword) {
	
			require("connect_db.php");
			mysqli_query("INSERT INTO registro VALUES('$usuario','$password','$email','$rpassword','')");
			mysqli_close($link);
			echo '<script>alert("BIENVENIDO")</script> ';
			echo "<script>location.href='bienvenido.php'</script>";
		} else {
			echo '<script>alert("Las contraseñas no coinciden")</script> ';
			echo "<script>location.href='ingreso.php'</script>";
		}
			} else {
		echo "Por favor rellene todos los campos requeridos.";
	}
?>
