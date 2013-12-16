<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php
	require 'connect.inc.php';
?>

<form action="index.php" method="GET">
	choose a food type
	<select name="uh">
		<option value="u">Unhealthy</option>
		<option value="h">Healthy</option>
	</select><br />
	<input type="submit" value="submit" />
</form>
	


<?php

if( isset($_GET['uh']) && !empty($_GET['uh']) ){

	$uh = $_GET['uh'];
	


	//$query = "SELECT `food`, `calories` FROM `food` WHERE `healthy_unhealthy`='h' AND `calories`='600' ORDER BY `id` DESC ";

	$query = "SELECT `food`, `calories` FROM `food` WHERE `healthy_unhealthy`='$uh' ORDER BY `id` DESC ";

	if( $query_run = mysql_query($query) ){

		if( mysql_num_rows($query_run) == null ){

			echo 'no results';

		}else{

			while( $query_row = mysql_fetch_assoc($query_run) ){
			$food = $query_row['food'];
			$calories = $query_row['calories'];
			
			echo $food.' has '.$calories.'<br />';

			}

		}			
	} else{			
		mysql_error();
	}
}




?>
	
</body>
</html>
