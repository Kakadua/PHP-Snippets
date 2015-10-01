<?php
	/**
	 * UTF-8 encodes all elements in an array
	 *
	 * @author Patrik "Popeen" Johansson <patrik@ptjwebben.se>
	 *
	 * @license https://raw.githubusercontent.com/Kakadua/PHP-Snippets/master/LICENSE Unlicense
	 *
	 * @link https://github.com/Kakadua/PHP-Snippets/
	 *
	 * @package Kakadua-PHP-Snippets
	 *
	 * @param array $array An array
	 *
	 * @return array An array
	 *
	 *	@version 1
	 */
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