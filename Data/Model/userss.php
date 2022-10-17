<?php
    function addusers($telephone, $villeuser, $password, $name, $firstname, $email){
        $sql = "INSERT INTO users VALUES(null, '$telephone', '$villeuser', '$password', '$name', '$firstname', '$email')";
        return executeSQL($sql);
    }

     function listusers(){
        $sql = "SELECT * FROM users";
        return executeSQL($sql);
    }

     function deletusers($id_user){
        $sql = " DELETE FROM users WHERE id_user =$id_user ";
        return executeSQL($sql);
    }

     function updateuserss($id_user, $telephone, $villeuser, $password, $name, $firstname, $email){
        $sql = " UPDATE users SET id_user='$id_user',telephone='$telephone', villeuser='$villeuser', password ='$password', name ='$name', firstname ='$firstname', email ='$email' WHERE id_user='$id_user' ;";
        return executeSQL($sql);
    }

    function getusersByid($id_user){
        $sql = "SELECT * FROM users WHERE id_user= '$id_user'; ";
        return executeSQL($sql);
    }

    function recherche($key){
        $sql = "SELECT * FROM users WHERE id_user LIKE '%$key%' or telephone LIKE '%$key%' or villeuser LIKE '%$key%' or password LIKE '%$key%' or name LIKE '%$key%' or firstname LIKE '%$key%' or email LIKE '%$key%' ";
        return executeSQL($sql);
    }
    
?>