<?php
	require_once '../Model/db.php';
	require_once '../Model/Client.php';

	$Nom = $_POST['nom'];
	$Prenom = $_POST['prenom'];
	$Addresse = $_POST['address'];
	$Ville = $_POST['ville'];

    if (isset($_POST['aj'])) {
        extract($_POST);
        samaclient($nom, $prenom, $address, $ville);
        header("location:http://localhost/Location/?page=listcli");
    }

    if (isset($_GET['ok'])) {
    	deletecli($_GET['ok']);
    	header("location:http://localhost/Location/?page=listcli");
    }

    if (isset($_POST['mo'])) {
        extract($_POST);
        updatecli($idc, $nom, $prenom, $address, $ville);
        header("location:http://localhost/Location/?page=listcli");
     }

      
?>