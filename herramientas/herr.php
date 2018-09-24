<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>
	<link rel="stylesheet" href="CSS/estilos.css">
	<link rel="stylesheet" href="CSS/layout.css">
	<link rel="stylesheet" href="CSS/desplegable.css">
	<link rel="stylesheet" href="CSS/fonts.css">
</head>
<body>
	<center><a href="add.php">AÑADIR MOD</a><br>
	<a href="updt.php">ACTUALIZAR MOD</a><br>
	<a href="del.php">ELIMINAR MOD</a><br>
	<a href="acc.php">ELIMINAR CUENTA</a><br>
	<a href="dowYlks.php">ACTUALIZAR DESCARGAS</a>
	<?php
	require "../version/ver.php";
	echo $version;
	?>
</body>
</html>
