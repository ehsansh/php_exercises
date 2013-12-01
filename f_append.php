<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php

		$fileName = 'test.txt';
		$handle = fopen($fileName, 'a');
		$string = ' ehsan<br />';
		fwrite($handle, $string);
		fclose($handle);


	?>
	
</body>
</html>
