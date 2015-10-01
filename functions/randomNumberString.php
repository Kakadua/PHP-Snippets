<?php
	/**
	 * Generates a string with random numbers
	 *
	 * @author Patrik "Popeen" Johansson <patrik@ptjwebben.se>
	 *
	 * @license https://raw.githubusercontent.com/Kakadua/PHP-Snippets/master/LICENSE Unlicense
	 *
	 * @link https://github.com/Kakadua/PHP-Snippets/
	 *
	 * @package Kakadua-PHP-Snippets
	 *
	 * @param int $length How many characters you want the string to have
	 *
	 * @return String Your generated string
	 *
	 *	@version 1
	 */
	function randomNumberString($length) {
		$result = '';
		for($i = 0; $i < $length; $i++) {
			$result .= mt_rand(0, 9);
		}
		return $result;
	}
?>