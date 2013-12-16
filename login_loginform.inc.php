<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

require 'core.inc.php';

if( isset($_POST['username']) && isset($_POST['password']) ){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password_hash = md5( $password );

	if( !empty($username) && !empty($password) ){
			
		$query ="SELECT `id` FROM `users` WHERE `username`='".mysql_real_escape_string($username)."' AND `password`='".mysql_real_escape_string($password_hash)."' ";

		if( $query_run = mysql_query($query) ){
			$query_num_row = mysql_num_rows($query_run);
			if( $query_num_row == 0 ){
				echo 'invalid username and password';
			} elseif ( $query_num_row == 1 ) {
				$user_id = mysql_result($query_run, 0, 'id');
				$_SESSION['user_id'] = $user_id;
				header('Location: index.php');
			}
		}

	} else{
		echo 'you must enter in the fields';
	}
}



?>

<form action="<?php echo $current_file; ?>" method="POST">
	Username: <input type="text" name="username" />
	Password: <input type="password" name="password" />
			  <input type="submit" value="login" />
	
</form>

	
</body>
</html>
