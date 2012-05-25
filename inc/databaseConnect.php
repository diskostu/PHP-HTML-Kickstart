<?php 

include('../init/database.php'); 

$dbConnect = mysql_connect(DBHOST, DBUSER, DBPASSWORD);

if (!$dbConnect) {
	die('Could not connect: ' . mysql_error());
}

// Some code

mysql_close($dbConnect);

?>
