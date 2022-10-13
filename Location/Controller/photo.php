<?php
    require_once '../Model/db.php';
    require_once '../Model/photocpie.php';

    $Marque = $_POST['marque'];
    $Modele = $_POST['modele'];
    $Dates = $_POST['dates'];
    $idc = $_POST['idc'];

    if (isset($_POST['aj'])) {
        extract($_POST);
        samaphoto($marque, $modele, $dates, $idc);
        header("location:http://localhost/Location/?page=listp");
    }

    if (isset($_GET['ok'])) {
        deletep($_GET['ok']);
        header("location:http://localhost/Location/?page=listp");
    }

    if (isset($_POST['mo'])) {
        extract($_POST);
        updatep($idp, $marque, $modele, $dates, $idc);
        header("location:http://localhost/Location/?page=listp");
     }

      
?>