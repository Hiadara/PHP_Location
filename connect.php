<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "training";

	// Créer une connexion à la base de données
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Vérifier si la connexion a échoué
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
?>