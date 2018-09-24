<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- Este archivo puede dejarse subido, pues si no se encuentra un formulario anterior no pasará nada -->
        <h1>AYUDA</h1>
        1 - Si dice "¡Conectado Correctamente!" significa que estas conectado a la base de <br>
        2 - Y luego dice "¡Registrado correctamente!" tendrás tu cuenta.<br>
        ------------------------------------------------------ <br><br>
        <?php
        // roleid, accountid
        // Datos
        include "../serv.php";
        if(!$_POST['user']){
          die("No se ha definido el usuario.");
        }

        if(!$_POST['pass']){
          die("No se ha defindido la contraseña.");
        }
        $usuario=$_POST['user'];
        $password=$_POST['pass'];

        $sql = "INSERT INTO gdpsAdmins(id, username, password) VALUES ('','$usuario','$password')";

        if (mysqli_query($conn, $sql)) {
            echo "¡Cuenta agregada correctamente!";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
        ?>
        <h4>Edit Mods by JeffreyGMD (v1.1)</h4>
  </body>
</html>
