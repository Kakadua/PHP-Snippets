PHP-Snippets
============

This is our collection of PHP-Snippets, they are functions and are incredibly easy to use.
You only need one of them to get started, that is include_kakadua_snippet($string), you can find in include_kakadua_snippet.php

This snippet can automatically download the other ones when needed. Lets look at an example.

We have the following string.

$my_string = "Kakadua means Cockatoo in Swedish";

We want to check if the string contains the word Cockatoo by using our function string_contain($string, $substring)



<?php
	
	include('PHP-Snippets/include_kakadua_snippet.php'); 
	include_kakadua_snippet('string_contain');

	/*
		Thats it, now the script will check if we already have the snippet downloaded, if not it will download it for us. 
		Just make sure that the script has permission to create directories/files and modify them.
	*/

	$my_string = "Kakadua means Cockatoo in Swedish";
	
	if(string_contain($my_string, 'Cockatoo')){
		echo "The string contains the word Cockatoo";
	} else{
		echo "The string does not contain the word Cockatoo";
	}

?>



If you want you can also include all the snippets at once using include_all_snippets like this, 
OBS, make sure the snippets are in a directory with no other scripts in it if you are going to use
this one. It includes all the php files in folder. Keep in mind that if anyone else is able to add 
a php file to the directory that file too will be run everytime so make sure to secure your site before using it.



<?php

	include('PHP-Snippets/include_all_snippets.php'); 
	include_all_snippets();

	/*
		Thats it, we now have all kakadua snippets included
	*/

	$my_string = "Kakadua means Cockatoo in Swedish";
	
	if(string_contain($my_string, 'Cockatoo')){
		echo "The string contains the word Cockatoo";
	} else{
		echo "The string does not contain the word Cockatoo";
	}

?>