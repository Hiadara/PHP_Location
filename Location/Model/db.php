<?php
	function getConnexion(){
		$host = "localhost";
		$user = 'root';
		$password = '';
		$db_name = 'location';

		$cons = mysqli_connect($host, $user, $password, $db_name);
		return $cons;
	}

	function executeSql($sql) {
		$exe = mysqli_query(getConnexion(), $sql);
		return $exe;
	}
?>