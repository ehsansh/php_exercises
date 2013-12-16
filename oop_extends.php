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

	public function Deposit($amount){
		$this->balance = $this->balance + $amount;
	}

}


class savingAccounts extends BankAccount{
	public $type = '18-15';
}

$ehsan_saving = new savingAccounts;

echo $ehsan_saving->DisplayBalance().'<br />';
echo $ehsan_saving->type;




?>
