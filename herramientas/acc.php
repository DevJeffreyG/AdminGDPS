<?php
include "../conx.php";
include "../langc/lang$lang.php";
require "../version/ver.php";
echo '<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>'.$hrDelAcc.'</title>	
	<link rel="stylesheet" href="CSS/estilos.css">
	<link rel="stylesheet" href="CSS/layout.css">
	<link rel="stylesheet" href="CSS/desplegable.css">
	<link rel="stylesheet" href="CSS/fonts.css">
</head>
<body>
	<center><h1>'.$hrDelAcc.'</h1>
	'.$otherHrr.'
	<form action="delAcc.php" method="post">
		'.$accountID.' <br>
		<input type="text" name="accountid"><br>
		'.$askPass.' <br>
		<input type="password" name="password"><br><br>
		<input type="submit" value="'.$hrDelAcc.'"><br><br>
		<a href="../help/index.php">'.$help.'</a>...
	</form></center>'.
	$version.'
</body>
</html>'
?>