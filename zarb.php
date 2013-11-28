<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		table td{
			border: 1px solid black;
		}
	</style>
</head>
<body>

	<?php
		echo '<table>';
		for ($i=1; $i<11; $i++) { 
			echo '<tr>';
			for ($j=1; $j<11; $j++) { 
				echo '<td>'.$i*$j.'</td>';
			}
			echo '</tr>';
		}
		echo '</table>';
	?>
	
	
	
</body>
</html>
