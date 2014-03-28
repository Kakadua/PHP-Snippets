<?php
	function trim_array($array){
		$i=0;
		foreach($array as $item){
			$array[$i] = trim($array[$i]);
			$i++;
		}
		$array = array_values($array);
		return $array;
	}
?>