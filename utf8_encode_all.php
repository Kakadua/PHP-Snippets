<?php
	function utf8_encode_all($inputArray){
		if(is_string($inputArray)){
			return utf8_encode($inputArray);
		}
		if(!is_array($inputArray)){
			return $inputArray;
		}
		$outputArray = array(); 
		foreach($inputArray as $i=>$d){ 
			$outputArray[$i] = utf8_encode_all($d); 
		}
		return $outputArray; 
	}
?>