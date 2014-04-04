<?php
	function clean_array_string_contain($array, $crap){
		//Requires string_contain()
		for ($i = 0; $i < count($array); $i++) {
			if(string_contain($array[$i], $crap)) {
				array_splice($array, $i, 1);
				$i--;
			}
		}
		return $array;
	}
?>