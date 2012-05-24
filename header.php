<?php
	if($_SERVER['SERVER_NAME'] == 'localhost') define('BASE','http://localhost/'); // sets base variable depending on if you are on localhost
	else define('BASE','http://www.yourdomain.co.uk');
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Awesome Description Here">
	<title>website title</title>
	<link rel="stylesheet" href="<?php echo BASE ?>reset.css">
	<link rel="stylesheet" href="<?php echo BASE ?>style.css">
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<header>
		<h1>Header</h1>
	</header>
	<div class="container" id="main">
