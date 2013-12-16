<?php
require 'core.inc.php';
require 'connect.inc.php';

function loggedin(){
	if( isset($_SESSION['user_id']) && !empty($_SESSION['user_id']) ){
		return true;
	} else{
		return false;
	}
}

if( !loggedin() ){

	if( isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password_again']) && isset($_POST['firstname']) && isset($_POST['surname']) ){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password_again = $_POST['password_again'];
		$password_hash = md5($password);
		$firstname = $_POST['firstname'];
		$surname = $_POST['surname'];

		if( !empty($username) && !empty($password) && !empty($password_again) && !empty($firstname) && !empty($surname) ){
			if( $password != $password_again ){
				echo "password do not match";
			} else{

				$query = "SELECT `username` FROM `users` WHERE `username` = '$username' ";
				$query_run = mysql_query($query);

				if ( mysql_num_rows($query_run) == 1 ){
					echo 'username '.$username.' already exists';
				} else{
					
					$query = "INSERT INTO `users` VALUES ('','".mysql_real_escape_string($username)."','".mysql_real_escape_string($password_hash)."','".mysql_real_escape_string($firstname)."','".mysql_real_escape_string($surname)."')  ";
					if ( $query_run = mysql_query($query) ){
						header('Location: register_success.php');
					} else{
						echo 'try again an error while registering';
					}
				}


			}
		}else{
			echo "All fields are required";
		}

	}



?>

<form action="register.php" method="POST">
	username: <input type="text" name="username" value="<?php if( isset($username) ) {echo $username;} ?> " /><br />
	password: <input type="password" name="password"  /><br />
	password_again: <input type="password" name="password_again" /><br />
	firstname: <input type="text" name="firstname" /><br />
	surname: <input type="text" name="surname" /><br />
	<input type="submit" value="register" />

</form>


<?php
} elseif( loggedin() ){
	echo "you are already registered and logged in";
}





?>
