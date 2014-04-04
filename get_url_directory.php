<?php
	function get_url_directory(){
		$http = 'http';
		if(isset($_SERVER['HTTPS'])){ $http = 'https'; }
		$url = $http.'://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		$file = end(explode('/', $url));
		return substr($url, 0, -1*(strlen($file)));
	}
?>