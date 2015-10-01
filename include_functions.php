<?php
	//Include this file to include all the functions
	foreach (glob(dirname(__FILE__)."/functions/*.php") as $filename){
		if($filename != 'include_functions.php'){
			include_once $filename;
		}
	}
?>