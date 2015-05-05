<?php
	/**
	 * Removes new lines and tabs
	 *
	 * @author Patrik "Popeen" Johansson <patrik@ptjwebben.se>
	 *
	 * @license https://raw.githubusercontent.com/Kakadua/PHP-Snippets/master/LICENSE Unlicense
	 *
	 * @link https://github.com/Kakadua/PHP-Snippets/
	 *
	 * @package Kakadua-PHP-Snippets
	 *
	 * @param String $raw The string you want to remove the lines from
	 *
	 * @return String Your string without the lines and tabs
	 *
	 *	@version 1
	 */
	function remove_new_lines($raw){
		$newlines = array("\t","\n","\r","\x20\x20","\0","\x0B");
		return str_replace($newlines, "", html_entity_decode($raw));
	}
?>