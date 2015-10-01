<?php
	/**
	 * Runs html_entity_decode on all elements in an array
	 *
	 * @author Patrik "Popeen" Johansson <patrik@ptjwebben.se>
	 *
	 * @license https://raw.githubusercontent.com/Kakadua/PHP-Snippets/master/LICENSE Unlicense
	 *
	 * @link https://github.com/Kakadua/PHP-Snippets/
	 *
	 * @package Kakadua-PHP-Snippets
	 *
	 * @param array $array The array that should have it's elements decoded
	 *
	 * @return array An array where the elements have been decoded
	 *
	 *	@version 1
	 */
	function html_entity_decode_all($array){
		$i=0;
		foreach($array as $value){
			$array[$i] = html_entity_decode($value);
			$i++;
		}
		return $array;
	}
?>