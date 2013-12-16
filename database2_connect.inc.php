<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<?php
		
		if( mysql_connect('localhost','root','') && mysql_select_db('test') ){
			
		} else{
			die('could not connected');
		}

	?>


</body>
</html>
