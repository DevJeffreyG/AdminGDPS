<?php
    include "../conx.php";
    include "../langc/lang$lang.php";
echo '<h1>'.$bigHelp.'</h1>';
<?php
echo '1 - '.$siDice.'<br>';
echo '2 - '.$yLuegoDiceDelMod.'<br>';
?>
------------------------------------------------------ <br><br>
<?php
// assignid
// Datos
include "../conx.php";

// Crear conexión
$conn = mysqli_connect($servername, $username, $pw, $dbname);
// Verificar conexión
if (!$conn) {
    die($badCon . mysqli_connect_error());
}else{
	echo $goodCon;
}

if($_POST['password'] != $seguro){
  echo $incPass;
  mysqli_close($conn);
  die;
  return;
}

// sql to delete a record
$sql = "DELETE FROM roleassign WHERE assignID='$_POST[assignid]'";

if (mysqli_query($conn, $sql)) {
    echo $delMod;
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
<?php
require "../version/ver.php";
echo $version;
?>
