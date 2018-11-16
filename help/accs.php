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
$sql = "SELECT accountID, userName FROM accounts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>".$accountID."</th><th>".$nombreDeUsuario."</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["accountID"]."</td><td>".$row["userName"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo $ripServers;
}
$conn->close();
?>
