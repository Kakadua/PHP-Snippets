<?php
	function remove_new_lines($raw){
		$newlines = array("\t","\n","\r","\x20\x20","\0","\x0B");
		return str_replace($newlines, "", html_entity_decode($raw));
	}
?>