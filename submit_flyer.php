<?php
$servername = "localhost";
$username = "gmapsuser";
$password = "gmaps123";
$dbname = "gmaps";

// create conn
$conn = new mysqli($servername, $username, $password, $dbname);
// check conn
if ($conn->connect_error) {
	die("Connection failed! Reason: " . $conn->connect_error);
}

$sql = "SELECT * from markers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data from each row
	while($row = $result->fetch_assoc()) {
		echo "Marker number: " . $row["id"]. " - Flyer ID: " . $row["flyerid"]. " - Latitude: " . $row["lat"]. " - Longitude: " . $row["lon"]. " - Title: ".$row["title"]. "<br>";
	}
} else {
	echo "0 results!";
}
$conn->close();
?>
