<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php
    include "../conx.php";
    include "../langc/lang$lang.php";
    echo '<h1>'.$bigHelp.'</h1>
    1 - '.$siDice.'<br>
    2 - '.$yLuegoDiceDelFromAccs.'<br>
    3 - '.$yLuegoDiceDelFromUsers.'<br>
    ------------------------------------------------------ <br><br>';

$accountid = $_POST["accountid"];

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
$sql = "DELETE FROM accounts WHERE accountID='$accountid'";

if (mysqli_query($conn, $sql)) {
    echo $delFromAccs.'<br>';
} else {
    echo "Error: " . mysqli_error($conn);
}

$sql2 = "DELETE FROM users WHERE extID='$accountid'";

if (mysqli_query($conn, $sql2)) {
    echo $delFromUsers.'<br>';
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
<?php
require "../version/ver.php";
echo $version;
?>
