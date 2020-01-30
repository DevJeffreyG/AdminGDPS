<?php
	// Datos
	include "../../conx.php";
    include "../../langc/lang$lang.php";
echo '<h1>'.$bigHelp.'</h1>
1 - '.$siDice.'<br>
2 - '.$yLuegoDiceUpdQuest.'<br>
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

switch(strtolower($_POST['type'])){
    case 1: case "orbs": case "orbes":
        $tipo = 1;
    break;

    case 2: case "coins": case "user": case "monedas": case "user coins": case "user coin": case "monedas de usuario":
        $tipo = 2;
    break;

    case 3: case "stars": case "estrellas": case "star": case "estrella":
        $tipo = 3;
    break;

    default:
        echo $badType;
        mysqli_close($conn);
        die;
        return;
    break;
}

$sql = "UPDATE quests SET type= '$tipo', amount= '$_POST[quantity]', reward= '$_POST[award]', name= '$_POST[name]' WHERE ID= $_POST[id]";

if (mysqli_query($conn, $sql)) {
    echo $updQuest;
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
<?php
require "../../version/ver.php";
echo $version;
?>
