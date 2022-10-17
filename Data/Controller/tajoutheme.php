<?php
	require_once '../Model/db.php';
	require_once '../Model/theme.php';

   if (isset($_POST['aj'])) {
        extract($_POST);
        samatheme($name, $description, $id_message);
        header("location:http://localhost/Data/?page=listthems");
    }

    if (isset($_GET['ok'])) {
    	deletethemess($_GET['ok']);
    	header("location:http://localhost/Data/?page=listthems");
    }

    if (isset($_POST['mo'])) {
        extract($_POST);
        updatethemes($id_theme, $name, $description, $id_message);
        header("location:http://localhost/Data/?page=listthems");
     }

      
?>