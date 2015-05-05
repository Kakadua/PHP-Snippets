<?php
	/**
	 * Removes an element from an array if it contains specified string
	 * OBS This requires the string_contain($string, $substring) function
	 *
	 * @author Patrik "Popeen" Johansson <patrik@ptjwebben.se>
	 *
	 * @license https://raw.githubusercontent.com/Kakadua/PHP-Snippets/master/LICENSE Unlicense
	 *
	 * @link https://github.com/Kakadua/PHP-Snippets/
	 *
	 * @package Kakadua-PHP-Snippets
	 *
	 * @param array $array The array you want to clean
	 * @param String $crap The string you want to look for
	 *
	 * @return array A neat and clean array
	 *
	 *	@version 1
	 */
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