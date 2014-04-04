<?php
	function clean_empty_strings_array($array){
		for ($i = 0; $i < count($array); $i++) {
			if($array[$i] == '' || $array[$i] == ' ') {
				array_splice($array, $i, 1);
				$i--;
			}
		}
		return $array;
	}
?>