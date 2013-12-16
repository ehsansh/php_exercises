<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php

		$name = $_FILES['file']['name'];		
		$tmp_name = $_FILES['file']['tmp_name'];
		$type = $_FILES['file']['type'];
		$size = $_FILES['file']['size'];
		$extension = strtolower( substr( $name, strpos($name, '.')+1 ) );
		$location = 'uploads/';
		$max_size = 500000;

		if( isset($name) ){
			if( !empty($name) ){
				if( ($extension=='jpg' || $extension=='jpeg') && ($type=='image/jpeg' || $type=='image/jpg') && $size<=$max_size  ){
					$new_name = str_shuffle($name).rand(1,1000000).'.jpg';
					if( move_uploaded_file($tmp_name, $location.$new_name) ){
						echo "file has been uploaded";						
					} else{
						echo 'your file must be image and less than 50kb';
					}
				}
			} else{
				echo 'please choose a file';
			}
		}


	?>
	
	<form action="upload.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="file" /><br />
		<input type="submit" value="submit" />
		
	</form>
	

	
</body>
</html>
