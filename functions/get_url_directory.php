<?php
	/**
	 * Gets the directory of the current script as seen in the url
	 *
	 * @author Patrik "Popeen" Johansson <patrik@ptjwebben.se>
	 *
	 * @license https://raw.githubusercontent.com/Kakadua/PHP-Snippets/master/LICENSE Unlicense
	 *
	 * @link https://github.com/Kakadua/PHP-Snippets/
	 *
	 * @package Kakadua-PHP-Snippets
	 *
	 * @return String The url of the directory the script appears to be in
	 *
	 *	@version 1.1
	 */
	function get_url_directory(){
		$http = 'http';
		if(isset($_SERVER['HTTPS'])){ $http = 'https'; }
		$url = $http.'://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		if(substr($url, -1) != '/'){
			$temp = explode('/', $url);
			$file = end($temp);
			return substr($url, 0, -1*(strlen($file)));
		}else{
			return $url;
		}
	}
?>