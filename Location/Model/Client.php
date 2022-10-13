<?php
    function samaclient($nom, $prenom, $address, $ville){
        $sql = "INSERT INTO client VALUES(null,'$nom', '$prenom', '$address', '$ville')";
        return executeSQL($sql);
    }

     function listcli(){
        $sql = "SELECT * FROM client";
        return executeSQL($sql);
    }

     function deletecli($idc){
        $sql = "DELETE FROM client WHERE idc ='$idc' ";
        return executeSQL($sql);
    }

    function updatecli($idc, $nom, $prenom, $address, $ville){
        $sql = " UPDATE client SET idc='$idc',nom='$nom', prenom='$prenom', address ='$address', ville ='$ville' WHERE idc='$idc' ;";
        return executeSQL($sql);
    }

    function getcliByid($idc){
        $sql = "SELECT * FROM client WHERE idc= '$idc' ;";
        return executeSQL($sql);
    }

    function recherche($key){
        $sql = "SELECT * FROM client WHERE idc LIKE '%$key%' or nom LIKE '%$key%' or prenom LIKE '%$key%' or address LIKE '%$key%' or ville LIKE '%$key%' ";
        return executeSQL($sql);
    }
    
?>