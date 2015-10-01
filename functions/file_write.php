<?php
	/**
	 * Write a string to a file
	 *
	 * @author Patrik "Popeen" Johansson <patrik@ptjwebben.se>
	 *
	 * @link https://github.com/Kakadua/PHP-Snippets/
	 *
	 * @package Kakadua-PHP-Snippets
	 *
	 * @param String $file location/name of the file you want to write to. Ex, config.cfg
	 * @param String $data The string you want to write
	 *
	 *	@version 1
	 */
	function file_write($file, $data){
		$fh = fopen($file, 'w') or die("can't open file");
		fwrite($fh, $data);
		fclose($fh);		
	}
?>