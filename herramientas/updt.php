<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ACTUALIZAR MOD</title>
	<link rel="stylesheet" href="CSS/estilos.css">
	<link rel="stylesheet" href="CSS/layout.css">
	<link rel="stylesheet" href="CSS/desplegable.css">
	<link rel="stylesheet" href="CSS/fonts.css">
</head>
<body>
	<center>
		<h1>ACTUALIZAR MOD</h1>
	<h1><a href="herr.html">Otra</a> herramienta?</h1>
	<form action="updtMod.php" method="post">
		Role ID:<br>
		<input type="text" name="roleid"><br>
		Account ID:<br>
		<input type="text" name="accountid"><br>
		Contraseña de seguridad: <br>
		<input type="password" name="password"><br><br>
		<input type="submit" value="Actualizar Mod"><br><br>
		<a href="../help/index.php">Ayuda</a>...
	</form>

	<?php
	require "../version/ver.php";
	echo $version;
	?>

</body>
</html>
