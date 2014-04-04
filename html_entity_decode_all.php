<?php
	function html_entity_decode_all($array){
		$i=0;
		foreach($array as $value){
			$array[$i] = html_entity_decode($value);
			$i++;
		}
		return $array;
	}
?>