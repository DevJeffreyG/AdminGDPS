<h1>AYUDA</h1>
1 - Si dice "¡Conectado Correctamente!" significa que estas conectado a la base de <br>
2 - Y luego dice "¡Descargas actualizadas!" las descargas se cambiaron. 8) <br>
3 - y luego dice "¡Likes actualizados!" las descargas se cambiaron. 8) <br>
------------------------------------------------------ <br><br>
<?php
// levelid, descargas, likes
// Datos
include "../conx.php";

// Crear conexión
$conn = mysqli_connect($servername, $username, $pw, $dbname);
// Verificar conexión
if (!$conn) {
    die("No conectado... " . mysqli_connect_error());
}else{
	echo "¡Conectado Correctamente!<br>";
}

if($_POST['password'] != $seguro){
  echo "¡Contraseña de seguridad incorrecta! ¯\_(ツ)_/¯";
  mysqli_close($conn);
  die;
  return;
}


$sql = "UPDATE levels SET downloads='$_POST[descargas]' WHERE levelID='$_POST[levelid]'";

if (mysqli_query($conn, $sql)) {
    echo "¡Descargas actualizadas! <br>";
} else {
    echo "Error: " . mysqli_error($conn);
}

$sql = "UPDATE levels SET likes='$_POST[likes]' WHERE levelID='$_POST[levelid]'";

if (mysqli_query($conn, $sql)) {
    echo "¡Likes actualizados! <br>";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
<?php
require "../version/ver.php";
echo $version;
?>
