<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php

		$find = 'is';
		$string = 'This is a string which is to this case';
		$offset = 0;
		$find_length = strlen($find);

		while ( $pos = strpos($string, $find, $offset) ) {
			echo $find.' '.'found at '.$pos.'<br />';
			$offset = $pos + $find_length;
		}	


		


	?>



	
</body>
</html>
