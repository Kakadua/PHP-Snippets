<?php
	function string_contain($string, $subString){
		if(strpos($string, $subString) !== FALSE){
			return true;
		}
		else{
			return false;
		}
	}
?>