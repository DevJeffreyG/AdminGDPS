<?php
include "../conx.php";
include "../header.php";
include "../langc/lang$lang.php";
require "../version/ver.php";
echo '<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>
	<link rel="stylesheet" href="../CSS/estilos.css">
	<link rel="stylesheet" href="../CSS/layout.css">
	<link rel="stylesheet" href="../CSS/fonts.css">
</head>
<body>
	'.$doHeader.'
    <font size="6">
    <center><form>
      <h1>Bienvenido</h1><br>
		Estás en la página principal de AdminGDPS.<br>
		Arriba tienes una barra en donde puedes buscar la herramienta que necesites, o la información de cuentas, mods, IDs, lo que necesites.
	</form></font>
	'.
	$reportBug.
	$version.'</center>
</body>
</html>';
?>