<?php
	/**
	 * Makes the first letter in every element uppercase
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
	function ucfirst_array($array){
		for ($i = 0; $i < count($array); $i++) {
			$array[$i] = ucfirst($array[$i]);
		}
		return $array;
	}
?>