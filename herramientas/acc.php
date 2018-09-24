<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ELIMINAR CUENTA</title>
	<link rel="stylesheet" href="CSS/estilos.css">
	<link rel="stylesheet" href="CSS/layout.css">
	<link rel="stylesheet" href="CSS/desplegable.css">
	<link rel="stylesheet" href="CSS/fonts.css">
</head>
<body>
	<center><h1>ELIMINAR CUENTA</h1>
	<h1><a href="herr.html">Otra</a> herramienta?</h1>
	<form action="delAcc.php" method="post">
		AccountID: <br>
		<input type="text" name="accountid"><br>
		Contraseña de seguridad: <br>
		<input type="password" name="password"><br><br>
		<input type="submit" value="ELIMINAR CUENTA"><br><br>
		<a href="../help/index.php">Ayuda</a>...
	</form></center>
	<?php
	require "../version/ver.php";
	echo $version;
	?>
</body>
</html>
