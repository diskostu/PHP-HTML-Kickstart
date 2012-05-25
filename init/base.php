<?php

$path = explode(DIRECTORY_SEPARATOR, getcwd()); // Explode current directory into an array

$url = end($path); // target the last folder in the array (where the file is)

$base = NULL; // NULL variable so to help the IF statement

$server = $_SERVER['HTTP_HOST']; // Grabs the server name you are using

if ($server == 'localhost' or 'localhost:8888' or '127.0.0.1') { 
	$base = 'http://';
} 

$base .= $server . '/' . $url . '/';

define('BASE', $base);

?>
