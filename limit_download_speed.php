<?php
	$server_file = 'file.zip';
	$download_name = 'new-filename.zip';
	$download_speed = 70; //Download speed in kb/s
	
	if(file_exists($server_file) && is_file($server_file)) {
		$server_file_size = filesize($server_file);
	
		header("Cache-control: private");
		header("Content-Type: application/octet-stream");
		header("Content-Length: {$server_file_size}");
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
		die("Error the file do not exist");
	}
?>