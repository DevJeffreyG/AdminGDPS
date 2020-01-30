<?php
// Datos
include "../../conx.php";
include "../../langc/lang$lang.php";
echo '<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>'.$hrAddMod.'</title>
  </head>
  <body>
    <h1>'.$bigHelp.'</h1>';
    echo '1 - '.$siDice.'<br>';
    echo '2 - '.$yLuegoDiceAddQuest.'<br>';
    echo '------------------------------------------------------ <br><br>';
    // roleid, accountid

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

    $tipo = $_POST['type'];

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

    $sql = "INSERT INTO quests (ID, type, amount, reward, name)
    VALUES (NULL, $tipo, $_POST[quantity], $_POST[award], '$_POST[name]')";

    if (mysqli_query($conn, $sql)) {
        echo $addQuest;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
    ?>
		<?php
		require "../../version/ver.php";
		echo $version;
		?>
  </body>
</html>
