<?php
    function getConnexion() {

        $host = 'localhost';

        $user = 'root';

        $pwd = '';

        $db_name = 'sendata';

        $cons = mysqli_connect($host, $user, $pwd, $db_name);
        return $cons;

    }

    function executeSQL($sql) {

        $exec = mysqli_query(getConnexion(),$sql);
        return $exec;

    }
?>