<style>
table, th, td {
    border: 1px solid black;
}
</style>
<?php
include "../conx.php";
include "../header.php";
include "../langc/lang$lang.php";
require "../version/ver.php";
echo $doHeader.$version;

// Crear conexión
$conn = new mysqli($servername, $username, $pw, $dbname);
// Verificar conexión
if ($conn->connect_error) {
    die($badCon . $conn->connect_error);
}
// Table
$sql = "SELECT userName, levelID, levelName, downloads, likes FROM levels ORDER BY `levelID` ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>".$createdBy."</th><th>".$levelID."</th><th>".$nombreNivel."</th><th>".$actualDownloads."</th><th>".$actualLikes."</th></tr>";
    // output data of each
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["userName"]."</td><td>".$row["levelID"]."</td><td>".$row["levelName"]."</td><td>".$row["downloads"]."</td><td>".$row["likes"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo $ripServers;
}
$conn->close();
?>
