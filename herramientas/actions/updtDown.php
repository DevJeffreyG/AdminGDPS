<?php
	// Datos
	include "../../conx.php";
    include "../../langc/lang$lang.php";
    
echo '<h1>'.$bigHelp.'</h1>
1 - '.$siDice.'<br>
2 -  '.$yLuegoDiceDownsUpd.'<br>
3 -  '.$yLuegoDiceLikesUpd.'<br>
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
  echo $incPas;
  mysqli_close($conn);
  die;
  return;
}


$sql = "UPDATE levels SET downloads='$_POST[descargas]' WHERE levelID='$_POST[levelid]'";

if (mysqli_query($conn, $sql)) {
    echo $downsUpd.'<br>';
} else {
    echo "Error: " . mysqli_error($conn);
}

$sql = "UPDATE levels SET likes='$_POST[likes]' WHERE levelID='$_POST[levelid]'";

if (mysqli_query($conn, $sql)) {
    echo $likesUpd.'<br>';
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
<?php
require "../../version/ver.php";
echo $version;
?>
