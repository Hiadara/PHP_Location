<?php

	require_once '../Model/db.php';
	require_once '../Model/submode.php';

    if (isset($_POST['aj'])) {
        extract($_POST);
        adsubjet($title, $dats, $tims, $id_user, $id_theme);
        header("location:http://localhost/Data/?page=listsubject");
    }

     if (isset($_GET['ok'])) {
        deletetsubject($_GET['ok']);
        header("location:http://localhost/Data/?page=listsubject");
    }

    if (isset($_POST['mo'])) {
        extract($_POST);
        updatesubjects($id_subject, $title, $dats, $tims, $id_user, $id_theme);
        header("location:http://localhost/Data/?page=listsubject");
     }



?>