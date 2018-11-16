<?php
include "../conx.php";
include "../langc/lang$lang.php";
require "../version/ver.php";
echo '<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>'.$bigHelp.' - '.$bigHome.'</title>
</head>
<body>
	<a href="accs.php">'.$cuentas.'</a><br>
	<a href="assId.php">'.$assigns.'</a><br>
	<a href="mods.php">'.$moderators.'</a><br>
	<a href="roleid.php">'.$roles.'</a><br>
	<a href="lvls.php">'.$levels.'</a><br>
	<a href="users.php">'.$users.'</a><br><br>
	<a href="../herramientas/herr.php">'.$otherHerrs.'</a>
	'.$version.'

</body>
</html>';
?>