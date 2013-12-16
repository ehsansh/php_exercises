<?php

class BanckAccount {

	private $balance = 10;

	public function DisplayBalance(){
		return $this->balance;
	}

}



$ehsan = new BanckAccount;



echo $ehsan->DisplayBalance();

echo $ehsan->balance;


?>
