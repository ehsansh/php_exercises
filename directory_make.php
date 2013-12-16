<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php
		mkdir('file');

		$fileName = "file\\test2.text";
		$handle = fopen($fileName, 'w');
		fwrite($handle, 'hello');
		fclose($handle);

		file_put_contents("file\\test1.txt", 'hi');

		file_put_contents("file\\test3.txt", 'world');

		echo 'three files and a dicretory have been created in file directory';






	?>
	
</body>
</html>
