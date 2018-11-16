<style>
table, th, td {
    border: 1px solid black;
}
</style>
<?php
include "../conx.php";
include "../langc/lang$lang.php";
require "../version/ver.php";
echo '<a href="../herramientas/herr.php">'.$otherHerrs.'</a><br>
<a href="index.php">'.$help.'</a>'.$version;

// Crear conexión
$conn = new mysqli($servername, $username, $pw, $dbname);
// Verificar conexión
if ($conn->connect_error) {
    die($badCon . $conn->connect_error);
}
// Table
$sql = "SELECT userID, userName FROM users ORDER BY `userID` ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>".$userID."</th><th>".$nombreDeUsuario."</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["userID"]."</td><td>".$row["userName"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo $ripServers;
}
$conn->close();
?>
