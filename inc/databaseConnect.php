<?php 

include('../init/database.php'); 

$dbConnect = mysql_connect(DBHOST, DBUSER, DBPASSWORD);

if (!$dbConnect) {
	die('Could not connect: ' . mysql_error());
}
mysql_close($dbConnect);

?>
