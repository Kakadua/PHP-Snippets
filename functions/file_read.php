<?php
	/**
	 * Read a file to a string
	 *
	 * @author Patrik "Popeen" Johansson <patrik@ptjwebben.se>
	 *
	 * @link https://github.com/Kakadua/PHP-Snippets/
	 *
	 * @package Kakadua-PHP-Snippets
	 *
	 * @param String $file location/name of the file you want to write to. Ex, config.cfg
	 *
	 *	@version 1
	 */
	function file_read($file){
		$fh = fopen($file, 'r');
		$data = fread($fh, filesize($file));
		fclose($fh);
		return $data;	
	}
?>