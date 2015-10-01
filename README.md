PHP-Snippets
============

This is our collection of PHP-Snippets, they are incredibly easy to use.

You can either include just the ones you want like normal or you can include "include_functions.php" and it will include the rest for you.

Lets look at an example.

We have the following string.

$my_string = "Kakadua means Cockatoo in Swedish";

We want to check if the string contains the word Cockatoo by using our function string_contain($string, $substring)



<?php
	
	include('PHP-Snippets/include_functions.php');

	$my_string = "Kakadua means Cockatoo in Swedish";
	
	if(string_contain($my_string, 'Cockatoo')){
		echo "The string contains the word Cockatoo";
	} else{
		echo "The string does not contain the word Cockatoo";
	}

?>