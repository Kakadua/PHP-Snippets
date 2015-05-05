<?php
	/**
	 * Used to download and include a kakadua snippet. If the snippet has not previously been downloaded 
	 * it will download it for you and put it in the same directory as this include_kakadua_snippet.php. 
	 * If you pass in true as a second parameter it will always replace the current script with a fresh download.
	 *
	 * @author Patrik "Popeen" Johansson <patrik@ptjwebben.se>
	 *
	 * @license https://raw.githubusercontent.com/Kakadua/PHP-Snippets/master/LICENSE Unlicense
	 *
	 * @link https://github.com/Kakadua/PHP-Snippets/
	 *
	 * @package Kakadua-PHP-Snippets
	 *
	 * @param String $snippet The name of the snippet you want to download and include, example 'string_contain'
	 * @param boolean $update If you want to force download an updated version of the script from github, this parameter is optional and if not passed will default as false.
	 *
	 * @return void
	 *
	 *	@version 1
	 */
	function include_kakadua_snippet($snippet, $update=false){
	
		$snippet = str_replace('.php', '', $snippet);
		$dir = dirname(__FILE__);
		$file = "{$dir}/{$snippet}.php";
		$web = "https://raw.githubusercontent.com/Kakadua/PHP-Snippets/master/{$snippet}.php";
		
		if(!function_exists($snippet)){
		
			if(!file_exists($dir)){ mkdir($dir); }

			if(!file_exists($file) || $update){				
				$fh = fopen($file, 'w');
				fwrite($fh, "<?php //{$web} ?>\n".file_get_contents($web));
				fclose($fh);
			}
			
			include_once($file);
		}
		
	}
?>