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
    die("No conectado... " . $conn->connect_error);
}
// Table
$sql = "SELECT userName, levelID, levelName, downloads, likes FROM levels ORDER BY `levelID` ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Creado por</th><th>ID</th><th>Nombre del nivel</th><th>Descargas</th><th>Likes</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["userName"]."</td><td>".$row["levelID"]."</td><td>".$row["levelName"]."</td><td>".$row["downloads"]."</td><td>".$row["likes"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "Servidores caídos.";
}
$conn->close();
?>
