<?php
        // Datos
        include "../conx.php";
        include "../langc/lang$lang.php";
echo '<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>'.$hrAddMod.'</title>
  </head>
  <body>
    <h1>'.$bigHelp.'</h1>';
    echo '1 - '.$siDice.'<br>';
    echo '2 - '.$yLuegoDiceAddMod.'<br>';
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

    $sql = "INSERT INTO roleassign (roleID, accountID)
    VALUES ($_POST[roleid] , $_POST[accountid])";

    if (mysqli_query($conn, $sql)) {
        echo $addMod;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
    ?>
		<?php
		require "../version/ver.php";
		echo $version;
		?>
  </body>
</html>
