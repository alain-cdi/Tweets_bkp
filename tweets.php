<?php

// Méthode GET recherche de tous les tweets de la table
	

include("db_connect.php");
	
global $conn;
$query = "SELECT * FROM tweet";
$response = array();
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_array($result))
{
	$response[] = $row;
}
header('Content-Type: application/json');
echo json_encode($response, JSON_PRETTY_PRINT);

?>