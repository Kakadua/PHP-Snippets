<?php
	function get_mx_servers($domain){
		$mx = array();
		getmxrr($domain,$mx);
		return $mx;
	}
?>