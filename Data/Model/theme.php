<?php
     function samatheme($name, $description, $id_message){
        $sql = "INSERT INTO themes VALUES(null,'$name', '$description', '$id_message')";
        return executeSQL($sql);
    }

    function listthems(){
        $sql = "SELECT * FROM themes";
        return executeSQL($sql);
    }

    function deletethemess($id_theme){
        $sql = " DELETE FROM themes WHERE id_theme =$id_theme ";
        return executeSQL($sql);
    }

    function updatethemes($id_theme, $name, $description, $id_message){
        $sql = " UPDATE themes SET id_theme='$id_theme', name='$name', description='$description', id_message='$id_message' WHERE id_theme='$id_theme' ";
        return executeSQL($sql);
    }

    function getthemesByid($id_theme){
        $sql = "SELECT * FROM themes WHERE id_theme= '$id_theme'; ";
        return executeSQL($sql);
    }

    // // function recherche($key){
    // //     $sql = "SELECT * FROM users WHERE id_user LIKE '%$key%' or name LIKE '%$key%' or description LIKE '%$key%' or password LIKE '%$key%' or name LIKE '%$key%' or firstname LIKE '%$key%' or email LIKE '%$key%' ";
    // //     return executeSQL($sql);
    // // }
    
?>