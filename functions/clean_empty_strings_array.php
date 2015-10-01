<?php
	/**
	 * Removes elements with empty string from an array
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
	 *
	 * @return array A neat and clean array
	 *
	 *	@version 1
	 */
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