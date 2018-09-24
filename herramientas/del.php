<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ELIMINAR MOD</title>
	<link rel="stylesheet" href="CSS/estilos.css">
	<link rel="stylesheet" href="CSS/layout.css">
	<link rel="stylesheet" href="CSS/desplegable.css">
	<link rel="stylesheet" href="CSS/fonts.css">
</head>
<body>
	<center><h1>ELIMINAR MOD</h1>
	<h1><a href="herr.php">Otra</a> herramienta?</h1>
	<form action="delMod.php" method="post">
		Assign ID:<br>
		<input type="text" name="assignid"><br>
		Contraseña de seguridad: <br>
		<input type="password" name="password"><br><br>
		<input type="submit" value="Eliminar Mod"><br><br>
		<a href="../help/index.php">Ayuda</a>...
	</form>

	<?php
	require "../version/ver.php";
	echo $version;
	?>

</body>
</html>
