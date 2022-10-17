<?php
	require_once '../Model/db.php';
	require_once '../Model/mes.php';

    if (isset($_POST['aj'])) {
        extract($_POST);
        admesages($title, $dates, $timess, $texts, $id_user, $id_subject);
        header("location:http://localhost/Data/?page=listmess");
    }

    if (isset($_GET['ok'])) {
    	deletetmessages($_GET['ok']);
    	header("location:http://localhost/Data/?page=listmess");
    }

    if (isset($_POST['mo'])) {
        extract($_POST);
        updatemessage($id_message, $title, $dates, $timess, $texts, $id_user, $id_subject);
        header("location:http://localhost/Data/?page=listmess");
     }

      
?>