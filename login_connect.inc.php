<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

if( mysql_connect('localhost', 'root','') && mysql_select_db('test2') ){

} else{
	die( mysql_errno() );
}



?>


	
</body>
</html>
