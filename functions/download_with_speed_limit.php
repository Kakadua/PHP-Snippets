<?php
	/**
	 * Serve a download with a limited download speed. Meke sure that nothing else is printed to the page or the downloaded file will be corrupted.
	 *
	 * @author Patrik "Popeen" Johansson <patrik@ptjwebben.se>
	 *
	 * @license https://raw.githubusercontent.com/Kakadua/PHP-Snippets/master/LICENSE Unlicense
	 *
	 * @link https://github.com/Kakadua/PHP-Snippets/
	 *
	 * @package Kakadua-PHP-Snippets
	 *
	 * @param String $server_file The location (relative) of the file on the server, example files/file.zip
	 * @param String $download_name The name you want the downloaded file to have, example white_cockatoos.zip
	 * @param int $download_speed The speed (in kb/s) you want the user to be able to download, example 500
	 *
	 * @return void
	 *
	 *	@version 1
	 */
	function download_with_speed_limit($server_file, $download_name, $download_speed){
		if(file_exists($server_file) && is_file($server_file)) {
			$file_size = filesize($server_file);		
			header("Cache-control: private");
			header("Content-Type: application/octet-stream");
			header("Content-Length: {$file_size}");
			header("Content-Disposition: filename={$download_name}");			
			flush();
			$file = fopen($server_file, "r");
			while(!feof($file)){
				echo fread($file, round($download_speed* 1024));
				flush();
				sleep(1);
			}
			fclose($file);
		}
		else {
			die("Error the file does not exist");
		}
	}
?>