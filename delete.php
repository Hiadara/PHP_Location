<?php
	/*Including connection file*/
	include("connect.php");

	/*Getting id from previous page*/
	$id=$_REQUEST['id'];

	/*SQL query of delete*/
	$sql = "DELETE FROM reg WHERE id=$id";

	if (mysqli_query($conn, $sql)) {
    	header("location:alerte.html");
	} else {
    	echo "Une erreur s'est produite : ".mysqli_error($conn);
	}
	// Fermeture de la connexion
	$conn->close();
?>