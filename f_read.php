<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php

		$fileName = 'test.txt';
		$handle = fopen($fileName, 'r');
		$result = fread($handle, 6);
		fclose($handle);
		echo $result;


	?>
	
</body>
</html>
