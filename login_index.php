<!doctype html>
<html lang="en" class="">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

require 'core.inc.php';
require 'connect.inc.php';



function getfield($field){
	$query = "SELECT `$field` FROM `users` WHERE `id` = '".$_SESSION['user_id']."'  ";
	if( $query_run = mysql_query($query) ){
		return $query_result = mysql_result($query_run, 0, $field);
	}
}


if( isset($_SESSION['user_id']) && !empty($_SESSION['user_id']) ){

	$firstname = getfield('firstname');
	$surname = getfield('surname');

	echo 'you \'re logged in '.$firstname.' '.$surname.' .<a href="logout.php">logout</a>';
	
} else{
	include 'loginform.inc.php';
}








?>


</body>
</html>
