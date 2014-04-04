<?php
	function ucfirst_array($array){
		for ($i = 0; $i < count($array); $i++) {
			$array[$i] = ucfirst($array[$i]);
		}
		return $array;
	}
?>