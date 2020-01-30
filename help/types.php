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
      <h1>'.$type.'</h1><br>
		'.$types.'	
	  </form></font>
	'.
	$reportBug.
	$version.'</center>
</body>
</html>';
?>