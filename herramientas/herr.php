<?php
include "../conx.php";
include "../langc/lang$lang.php";
require "../version/ver.php";
echo '<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>
	<link rel="stylesheet" href="CSS/estilos.css">
	<link rel="stylesheet" href="CSS/layout.css">
	<link rel="stylesheet" href="CSS/desplegable.css">
	<link rel="stylesheet" href="CSS/fonts.css">
</head>
<body>
	<center><a href="add.php">'.$hrAddMod.'</a><br>
	<a href="updt.php">'.$hrUpdMod.'</a><br>
	<a href="del.php">'.$hrDelMod.'</a><br>
	<a href="acc.php">'.$hrDelAcc.'</a><br>
	<a href="dowYlks.php">'.$hrUpdDaL.'</a><br><br>'.
	$reportBug.
	$version;'
</body>
</html>';
?>