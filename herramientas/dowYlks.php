<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ACTUALIZAR DESCARGAS</title>
	<link rel="stylesheet" href="CSS/estilos.css">
	<link rel="stylesheet" href="CSS/layout.css">
	<link rel="stylesheet" href="CSS/desplegable.css">
	<link rel="stylesheet" href="CSS/fonts.css">
</head>
<body>
	<center><h1>ACTUALIZAR DESCARGAS Y LIKES</h1>
	<h1><a href="herr.html">Otra</a> herramienta?</h1>
	<form action="updtDown.php" method="post">
		levelID: <br>
		<input type="text" name="levelid"><br>
		Descargas deseadas: <br>
		<input type="text" name="descargas"><br>
		Likes deseados: <br>
		<input type="text" name="likes"><br>
		Contraseña de seguridad: <br>
		<input type="password" name="password"><br><br>
		<input type="submit" value="Actualizar descargas"><br><br>
		<a href="../help/index.php">Ayuda</a>...
	</form></center>
	<?php
	require "../version/ver.php";
	echo $version;
	?>
</body>
</html>
