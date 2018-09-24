<h1>AYUDA</h1>
1 - Si dice "¡Conectado Correctamente!" significa que estas conectado a la base de <br>
2 - Y luego dice "¡Mod actualizado correctamente!" el rango se ha actualizado. 8) <br>
------------------------------------------------------ <br><br>
<?php
// roleid, accountid
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


$sql = "UPDATE roleassign SET roleID='$_POST[roleid]' WHERE accountID='$_POST[accountid]'";

if (mysqli_query($conn, $sql)) {
    echo "¡Mod actualizado correctamente!";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
<?php
require "../version/ver.php";
echo $version;
?>
