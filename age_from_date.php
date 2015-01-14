<?php
	function age_from_date($date){ //date is a string. Example $date = '1992-02-21';
		return intval(substr(date('Ymd') - date('Ymd', strtotime($date)), 0, -4));
	}
?>