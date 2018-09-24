<?php
// roleid, accountid
// Datos
include "conx.php";
include "serv.php";

if ($conn->connect_error) {
    die("No conectado... " . $conn->connect_error);
	require "version/ver.php";
	echo $version;
}else{
	echo "¡Conectado correctamente!";
	require "version/ver.php";
	echo $version;
}
?>
