<?php
// roleid, accountid
// Datos
include "conx.php";
include "serv.php";

if ($conn->connect_error) {
    die("No conectado... " . $conn->connect_error);
}else{
	echo "¡Conectado correctamente!";
}
?>
<?php
require "./version/ver.php";
echo $version;
?>
