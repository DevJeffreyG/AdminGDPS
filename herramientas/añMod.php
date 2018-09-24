<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>AYUDA</h1>
    1 - Si dice "¡Conectado Correctamente!" significa que estas conectado a la base de <br>
    2 - Y luego dice "¡Mod añadido correctamente!" hay un nuevo mod. 8) <br>
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

    $sql = "INSERT INTO roleassign (roleID, accountID)
    VALUES ($_POST[roleid] , $_POST[accountid])";

    if (mysqli_query($conn, $sql)) {
        echo "¡Mod añadido correctamente!";
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
