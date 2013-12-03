<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">

		table{
			margin: 0 auto;
			width: 500px;
		}
		table td{
			border: 1px solid black;
			text-align: center;
			padding: 10px;	
			font-size: 20px;			
		}
	</style>
</head>
<body>

	<?php

		$info = array(
				array('Fname'=>'ali','Lname'=>'ahmadi','Age'=>10,'Income'=>'1200rial'),
				array('Fname'=>'hasan','Lname'=>'riazi','Age'=>14,'Income'=>'1400rial'),
				array('Fname'=>'ahmad','Lname'=>'tehrani','Age'=>22,'Income'=>'2000rial'),
				array('Fname'=>'azam','Lname'=>'alavi','Age'=>20,'Income'=>'3200rial'),
				array('Fname'=>'hadi','Lname'=>'rostami','Age'=>30,'Income'=>'4200rial'),
				array('Fname'=>'reza','Lname'=>'ghomali','Age'=>34,'Income'=>'1200rial'),
				array('Fname'=>'neda','Lname'=>'kargar','Age'=>24,'Income'=>'1500rial'),
				array('Fname'=>'hoda','Lname'=>'heirani','Age'=>34,'Income'=>'4000rial'),
			);

		echo '<table>';
		echo '<tr><td>سن</td><td>درآمد</td><td>نام خانوادگی</td><td>نام</td></tr>';
		foreach ($info as $value) {
			echo '<tr>';
			echo '<td>';
			echo $value['Age'];
			echo '</td>';
			echo '<td>';
			echo $value['Income'];
			echo '</td>';			
			echo '<td>';
			echo $value['Lname'];
			echo '</td>';			
			echo '<td>';
			echo $value['Fname'];
			echo '</td>';
			echo '</tr>';
		}

		echo '</table>';

	?>





</body>
</html>
