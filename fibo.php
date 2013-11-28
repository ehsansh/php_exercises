<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php

		$fibo = array(0,1);
		

		for( $i=0; $i<20; $i++){

			$fibo[$i+2] = $fibo[$i] + $fibo[$i+1];

		}

		foreach ($fibo as $value) {
			echo $value.', ';
		}



	?>
	
</body>
</html>
