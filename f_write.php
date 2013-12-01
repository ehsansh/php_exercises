<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php

		$fileName = 'test.txt';
		$handle = fopen($fileName, 'w');
		fwrite($handle, 'hello');
		fclose($handle);

	?>
	
</body>
</html>
