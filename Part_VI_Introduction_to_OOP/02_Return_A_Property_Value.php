<?php
	
	class BankAccount
	{
		public $balance = 10.5;
		
		public function DisplayBalance()
		{
			//echo 'Balance: '.$this->balance;
			return 'Balance: '.$this->balance;
		}		
	}

	$vinay = new BankAccount;
	//$vinay->DisplayBalance();
	echo $vinay->DisplayBalance();
?>