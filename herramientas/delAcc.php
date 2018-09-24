<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>AYUDA</h1>
    1 - Si dice "¡Conectado Correctamente!" significa que estas conectado a la base de <br>
    2 - Y luego dice "Eliminado correctamente de 'accounts'" la cuenta fue eliminada de la tabla "accounts". 8) <br>
    ------------------------------------------------------ <br><br>
<?php
include "../conx.php";
$accountid = $_POST["accountid"];

// Crear conexión
$conn = mysqli_connect($servername, $username, $pw, $dbname);
// Verificar conexión
if (!$conn) {
    die("No conectado... " . mysqli_connect_error());
}else{
	echo "¡Conectado correctamente!<br>";
}

if($_POST['password'] != $seguro){
  echo "¡Contraseña de seguridad incorrecta! ¯\_(ツ)_/¯";
  mysqli_close($conn);
  die;
  return;
}

// sql to delete a record
$sql = "DELETE FROM accounts WHERE accountID='$accountid'";

if (mysqli_query($conn, $sql)) {
    echo "Eliminado correctamente de 'accounts'. <br>";
} else {
    echo "Error eliminando: " . mysqli_error($conn);
}

$sql2 = "DELETE FROM users WHERE extID='$accountid'";

if (mysqli_query($conn, $sql2)) {
    echo "Eliminado correctamente de 'users'. <br>";
} else {
    echo "Error eliminando: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
<?php
require "../version/ver.php";
echo $version;
?>
