<?php
	require_once '../Model/db.php';
	require_once '../Model/userss.php';

    if (isset($_POST['aj'])) {
        extract($_POST);
        addusers($telephone, $villeuser, $password, $name, $firstname, $email);
        header("location:http://localhost/Data/?page=listusers");
    }

    if (isset($_GET['ok'])) {
    	deletusers($_GET['ok']);
    	header("location:http://localhost/Data/?page=listusers");
    }

    if (isset($_POST['mo'])) {
        extract($_POST);
        updateuserss($id_user, $telephone, $villeuser, $password, $name, $firstname, $email);
        header("location:http://localhost/Data/?page=listusers");
     }

      
?>