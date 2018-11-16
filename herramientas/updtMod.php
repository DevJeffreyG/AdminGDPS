<?php
	// Datos
	include "../conx.php";
    include "../langc/lang$lang.php";
echo '<h1>'.$bigHelp.'</h1>
1 - '.$siDice.'<br>
2 - '.$yLuegoDiceUpdMod.'<br>
------------------------------------------------------ <br><br>';

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


$sql = "UPDATE roleassign SET roleID='$_POST[roleid]' WHERE accountID='$_POST[accountid]'";

if (mysqli_query($conn, $sql)) {
    echo $updMod;
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
<?php
require "../version/ver.php";
echo $version;
?>
