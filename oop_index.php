<?php


class BankAccount {

	public $balance =10;

	public function DisplayBalance(){
		return $this->balance;
	}

	public function Withdraw($amount){
		if( $this->balance>$amount ){
			$this->balance = $this->balance - $amount;
		} else{
			echo 'not enough money';
		}		
	}

}


$ehsan = new BankAccount;

$ehsan->Withdraw(11);

echo $ehsan->DisplayBalance();




?>
