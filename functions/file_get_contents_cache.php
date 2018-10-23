<?php
	/**
	 * Regular old file_get_contents but allows you to cache responses. By default the cache time is 120 seconds.
	 *
	 * @author Patrik "Popeen" Johansson <patrik@ptjwebben.se>
	 *
	 * @license https://raw.githubusercontent.com/Kakadua/PHP-Snippets/master/LICENSE Unlicense
	 *
	 * @link https://github.com/Kakadua/PHP-Snippets/
	 *
	 * @package Kakadua-PHP-Snippets
	 *
	 * @param String $url Name of the file to read. 
	 *
	 * @param String $seconds The number of seconds to cache 
	 *
	 * @return String The function returns the read data or FALSE on failure. 
	 *
	 *	@version 1
	 */
	function file_get_contents_cache($url, $seconds = 120){
		
		mkdir("cache");
		$cache = "cache/" . md5($url);
		
		if( filemtime($cache) > (time()-$seconds)){
			$raw = file_read($cache);
		}else{
			$raw = file_get_contents($url);
			file_write($cache, $raw);
		}
		
		return $raw;
	}
?>