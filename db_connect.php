<?php
	function db_connect($host,$user,$pass,$dbname){
		$conn = mysql_connect($host, $user, $pass);
		if($conn==false){
			echo("<p>Connection to database failed</p>");
			exit;
		}
		mysql_query("SET NAMES utf8");
		mysql_select_db($dbname);
	}
?>