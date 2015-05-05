<?php
	/**
	 * Generates a string with random letters, both lower and uppercase
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
	function random_letter_string($length) {
		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
		return substr(str_shuffle($chars),0,$length);
	}
?>