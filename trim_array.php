<?php
	/**
	 * Trim all the elements in an array
	 *
	 * @author Patrik "Popeen" Johansson <patrik@ptjwebben.se>
	 *
	 * @license https://raw.githubusercontent.com/Kakadua/PHP-Snippets/master/LICENSE Unlicense
	 *
	 * @link https://github.com/Kakadua/PHP-Snippets/
	 *
	 * @package Kakadua-PHP-Snippets
	 *
	 * @param array $array The array you want trimmed
	 *
	 * @return array Your trimmed array
	 *
	 *	@version 1
	 */
	function trim_array($array){
		$i=0;
		foreach($array as $item){
			$array[$i] = trim($array[$i]);
			$i++;
		}
		return array_values($array);
	}
?>