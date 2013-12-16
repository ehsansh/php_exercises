<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
<?php
	
if( mysql_connect('localhost','root','') && mysql_select_db('test2') ){
	
} else{
	die('could not connected');
}

if( isset($_POST['search_name']) ){
	$search_name = $_POST['search_name'];
	if( !empty($search_name) ){
		$query = "SELECT `name` FROM `names` WHERE `name` LIKE '%".mysql_real_escape_string($search_name)."%' ";
		$query_run = mysql_query($query);
		$query_num_rows = mysql_num_rows($query_run);

		if( $query_num_rows>=1 ){
			echo $query_num_rows.' Results found<br />';
			while( $query_row = mysql_fetch_assoc($query_run) ){
				echo $query_row['name'].'<br />';
			}	
		} else{
			echo 'no result';
		}
	}
}






?>


<form action="search.php" method="POST">
	Name: <input type="text" name="search_name" /><input type="submit" value="submit" />
</form>







</body>
</html>
