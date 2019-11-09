<?php
include "../conx.php";
include "../header.php";
include "../langc/lang$lang.php";
require "../version/ver.php";
echo '<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>'.$hrDelMod.'</title>
	<link rel="stylesheet" href="../CSS/estilos.css">
	<link rel="stylesheet" href="../CSS/layout.css">
	<link rel="stylesheet" href="../CSS/desplegable.css">
	<link rel="stylesheet" href="../CSS/fonts.css">
</head>
<body>
	'.$doHeader.'
	<center><h1>'.$hrDelMod.'</h1>
	<form action="actions/delMod.php" method="post">
		'.$assignID.'<br>
		<input type="text" name="assignid"><br>
		'.$askPass.' <br>
		<input type="password" name="password"><br><br>
		<input type="submit" value="'.$hrDelMod.'"><br><br>
	</form>

	'.$reportBug.$version.'

</body>
</html>';
?>
