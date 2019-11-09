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
	$sql = "SELECT roleID, roleName FROM roles";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    echo "<table><tr><th>".$roleID."</th><th>".$nombreDelRango."</th></tr>";
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "<tr><td>".$row["roleID"]."</td><td>".$row["roleName"]."</td></tr>";
	    }
	    echo "</table>";
	} else {
	    echo $ripServers;
	}
	$conn->close();
?>
