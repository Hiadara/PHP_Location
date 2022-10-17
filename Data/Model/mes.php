<?php

	function admesages($title, $dates, $timess, $text, $id_user, $id_subject){
       $sql = "INSERT INTO message VALUES(null, '$title', '$dates', '$timess', '$text', '$id_user', '$id_subject')";
       return executeSQL($sql);
    }

      function listmess(){
        $sql = "SELECT * FROM message";
        return executeSQL($sql);
    }

    function deletetmessages($id_message){
        $sql = " DELETE FROM message WHERE id_message =$id_message ";
        return executeSQL($sql);
    }

    //Function Update
     function updatemessage($id_message, $title, $dates, $timess, $texts, $id_user, $id_subject){
        $sql = " UPDATE message SET id_message='$id_message',title='$title', dates='$dates', timess ='$timess', texts ='$texts', id_user = '$id_user', id_subject ='$id_subject' WHERE id_message='$id_message' ;";
        return executeSQL($sql);
    }
    //Fin Update

    function getmessByid($id_message){
        $sql = "SELECT * FROM message WHERE id_message= '$id_message' ";
        return executeSQL($sql);
    }

?>