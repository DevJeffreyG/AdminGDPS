<style>
table, th, td {
    border: 1px solid black;
}
</style>
<a href="../herramientas/herr.php">Herramientas</a><br>
<a href="index.php">Ayuda</a>
<?php
require "../version/ver.php";
echo $version;
?>

<?php
// roleid, accountid
//
include "../conx.php";

// Crear conexión
$conn = new mysqli($servername, $username, $pw, $dbname);
// Verificar conexión
if ($conn->connect_error) {
    die("Not connected... " . $conn->connect_error);
}
// Table
$sql = "SELECT assignID, accountID FROM roleassign";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>assignID</th><th>accountID</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["assignID"]."</td><td>".$row["accountID"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "Servidores caídos.";
}
$conn->close();
?>
