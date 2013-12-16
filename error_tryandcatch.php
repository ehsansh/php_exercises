<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

$age = 16;

try {

	if( $age>18 ){
		echo "old enough";
	} else{
		throw new Exception("you are less than 18", 1);		
	}
	
} catch (Exception $e) {
	echo 'Error :'.$e->getMessage();
}



?>


	
</body>
</html>
