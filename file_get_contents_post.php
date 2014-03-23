<?php
	function file_get_contents_post($url,$postVariables){
		$postdata = http_build_query($postVariables);
		$opts = array('http' =>
			array(
				'method'  => 'POST',
				'header'  => 'Content-type: application/x-www-form-urlencoded',
				'content' => $postdata
			)
		);
		$context  = stream_context_create($opts);
		return file_get_contents($url, false, $context);
	}
?>