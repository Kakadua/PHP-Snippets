<?php
	/**
	 * Used to include all the scripts in the same folder. It requires that include_kakadua_snippet is in 
	 * the folder or has previously been included from elsewhere. 
	 * OBS, this includes all PHP files in the folder, not just kakadua snippets so it is important that you
	 * make sure there is no way for others to write to the directory or you will have a major security problem.
	 *
	 * @author Patrik "Popeen" Johansson <patrik@ptjwebben.se>
	 *
	 * @license https://raw.githubusercontent.com/Kakadua/PHP-Snippets/master/LICENSE Unlicense
	 *
	 * @link https://github.com/Kakadua/PHP-Snippets/
	 *
	 * @package Kakadua-PHP-Snippets
	 *
	 * @param boolean $update If you want to force download an updated version of the script from github, this parameter is optional and if not passed will default as false.
	 *
	 * @return void
	 *
	 *	@version 1
	 */
	function include_all_snippets($update=false){
		include_once('include_kakadua_snippet.php');
		
		$dir = dirname(__FILE__);
		foreach(scandir($dir) as $function){

			//If you have a file that you don want included add that to the ignore array
			$ignore = array('.git', 'README.md', 'LICENSE', 'include_all_snippets.php', 'include_kakadua_snippet.php');

			if(!in_array($function, $ignore) && !is_dir($function)){
				include_kakadua_snippet($function, $update);
			}

		}
	}
?>