<?php

	function adsubjet($title, $dats, $tims, $id_user, $id_theme){
       $sql = "INSERT INTO subjects VALUES(null, '$title', '$dats', '$tims', '$id_user', '$id_theme')";
       return executeSQL($sql);
    }

      function listsubject(){
        $sql = "SELECT * FROM subjects";
        return executeSQL($sql);
    }

  function deletetsubject($id_subject){
        $sql = " DELETE FROM subjects WHERE id_subject =$id_subject ";
        return executeSQL($sql);
    }

    function updatesubjects($id_subject, $title, $dats, $tims, $id_user, $id_theme){
      $sql = " UPDATE subjects SET id_subject='$id_subject', title='$title', dats='$dats', tims='$tims', id_user='$id_user', id_theme='$id_theme' WHERE id_subject='$id_subject' ";
        return executeSQL($sql);
    }

    function getsubjectsByid($id_subject){
        $sql = "SELECT * FROM subjects WHERE id_subject= '$id_subject' ";
        return executeSQL($sql);
    }

    // // function recherche($key){
    // //     $sql = "SELECT * FROM users WHERE id_user LIKE '%$key%' or title LIKE '%$key%' or dats LIKE '%$key%' or password LIKE '%$key%' or title LIKE '%$key%' or firstname LIKE '%$key%' or email LIKE '%$key%' ";
    // //     return executeSQL($sql);
    // // }



?>