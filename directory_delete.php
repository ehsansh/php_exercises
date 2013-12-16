<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php

		$dir = 'file';
		$handle = opendir($dir);		
		while ( $file = readdir($handle) ){
			if( $file!='..' && $file!='.' ){
				unlink('file\\'.$file);			
			}
		}
		closedir($handle);

		rmdir($dir);
		
		echo 'all files and directory have been deleted';



	?>
	
</body>
</html>
