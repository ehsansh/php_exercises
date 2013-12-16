<?php


class BankAccount {

	public $balance =0;

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

	public function Deposit($amount){
		$this->balance = $this->balance + $amount;
	}

}


$ehsan = new BankAccount;

$ali = new BankAccount;

$ehsan->Deposit(100);
$ali->Deposit(20);

$ehsan->Withdraw(10);

echo $ehsan->DisplayBalance().'<br />';
echo $ali->DisplayBalance().'<br />';





?>
