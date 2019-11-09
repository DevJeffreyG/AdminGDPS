<?php
include "../conx.php";
include "../header.php";
include "../langc/lang$lang.php";
require "../version/ver.php";
echo '<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>'.$hrUpdDaL.'</title>
	<link rel="stylesheet" href="../CSS/estilos.css">
	<link rel="stylesheet" href="../CSS/layout.css">
	<link rel="stylesheet" href="../CSS/desplegable.css">
	<link rel="stylesheet" href="../CSS/fonts.css">
</head>
<body>
	'.$doHeader.'
	<center><h1>'.$hrUpdDaL.'</h1>
	<form action="updtDown.php" method="post">
		'.$levelID.' <br>
		<input type="text" name="levelid"><br>
		'.$downloads.' <br>
		<input type="text" name="descargas"><br>
		'.$likes.' <br>
		<input type="text" name="likes"><br>
		'.$askPass.' <br>
		<input type="password" name="password"><br><br>
		<input type="submit" value="'.$hrUpdDaL.'"><br><br>
	</form></center>
	'.$reportBug.$version.'
</body>
</html>';
?>
