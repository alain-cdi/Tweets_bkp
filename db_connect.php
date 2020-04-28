<?php
/* Paramètres connexion serveur & bdd */
	$server = "localhost";
	$username = "root";
	$password = "root";
	$db = "dbtw";
	$connexion = mysqli_connect($server, $username, $password, $db) or die("Erreur de connexion: " . mysqli_error($connexion));
?>