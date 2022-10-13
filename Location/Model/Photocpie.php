<?php
     function samaphoto($marque, $modele, $dates, $idc){
        $sql = "INSERT INTO photocopieur VALUES(null,'$marque', '$modele', '$dates', '$idc')";
        return executeSQL($sql);
    }

    function listphotocopie(){
        $sql = "SELECT * FROM photocopieur";
        return executeSQL($sql);
    }

     function deletep($idp){
        $sql = "DELETE FROM photocopieur WHERE idp ='$idp' ";
        return executeSQL($sql);
    }

    function updatep($idp, $marque, $modele, $dates, $idc){
        $sql = " UPDATE photocopieur SET marque='$marque', modele='$modele', dates ='$dates', idc ='$idc' WHERE idp='$idp' ;";
        return executeSQL($sql);
    }

    function getpByid($idp){
        $sql = "SELECT * FROM photocopieur WHERE idp= '$idp' ;";
        return executeSQL($sql);
    }

    function recherche($key){
        $sql = "SELECT * FROM photocopieur WHERE idp LIKE '%$key%' or marque LIKE '%$key%' or modele LIKE '%$key%' or dates LIKE '%$key%' or idc LIKE '%$key%' ";
        return executeSQL($sql);
    }
    
?>