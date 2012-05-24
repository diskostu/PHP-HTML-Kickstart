<?php

$currentDirectory = getcwd(); // Get your current directory

$path = explode('\\', $currentDirectory); // Explode current directory into an array

$url = end($path); // target the last folder in the array (where the file is)

$base = NULL; // NULL variable to help the IF statement

$server = $_SERVER['HTTP_HOST']; // Grabs the server name you are using

if ($server == 'localhost' or 'localhost:8888' or '127.0.0.1') { 
	$base = 'http://'; // Adds http:// to the beginning of the base url if you are using a localhost
} 

$base .= $server . '/'; // e.g Localhost/

$base .= $url . '/'; // e.g Localhost/PHP-HTML-KICKSTART/

define('BASE', $base); // Stores the variable into a constant as we don't want it to change anymore


?>