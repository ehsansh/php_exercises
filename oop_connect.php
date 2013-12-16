<?php


class connection{

	public function __construct($db_host, $db_user, $db_password){
		if( $this->connect($db_host, $db_user, $db_password) ){
			echo 'connected';
		} else{
			echo 'not connected';
		}
	}

	public function connect($db_host, $db_user, $db_password){
		if( !mysql_connect($db_host, $db_user, $db_password) ){
			return flase;
		} else{
			return true;
		}
	}
	
}

$connect = new connection('localhost' ,'root', '');




?>
