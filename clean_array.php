<?php	
	function clean_array($array, $before, $after){
		$i = 0;
		foreach($array as $item){
			$array[$i] = str_replace($before, $after, $item);
			$i++;
		}
		return $array;
	}
?>