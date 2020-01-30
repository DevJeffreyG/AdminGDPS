<?php
include "../conx.php";
include "../header.php";
include "../langc/lang$lang.php";
require "../version/ver.php";
echo '<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>'.$hrUpdQuest.'</title>
	<link rel="stylesheet" href="../CSS/estilos.css">
	<link rel="stylesheet" href="../CSS/layout.css">
	<link rel="stylesheet" href="../CSS/desplegable.css">
	<link rel="stylesheet" href="../CSS/fonts.css">
</head>
<body>
	'.$doHeader.'
	<center><h1>'.$hrUpdQuest.'</h1>
    <form action="actions/updtQuest.php" method="post">
        '.$questID.'<br>
        <input type="text" name="id"><br>
        '.$type.'<a target="_blank" href="'.$root.'/help/types.php"><sup>?</sup></a><br>
		<input type="text" name="type"><br>
		'.$quantity.'<br>
        <input type="text" name="quantity"><br>
        '.$award.'<br>
		<input type="text" name="award"><br>
        '.$questName.'<br>
		<input type="text" name="name"><br>
		'.$askPass.' <br>
		<input type="password" name="password"><br><br>
		<input type="submit" value="'.$hrUpdQuest.'"><br><br>
	</form>
	'.$reportBug.$version.'
</body>
</html>'
?>