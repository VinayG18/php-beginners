<?php
	
	class BankAccount
	{
		public $balance = 10.5;
		
		public function DisplayBalance()
		{
			return 'Balance: '.$this->balance;
		}
		
		public function Withdraw($amount)
		{
			if(($this->balance)<$amount)
			{
				echo 'Not Enough Balance...<br>';
			}
			else
			{
				$this->balance = $this->balance - $amount;
			}
		}		
	}

	// new instance of class
	$vinay = new BankAccount;
	
	// withdrawing 5
	$vinay->Withdraw(16);
	
	// displaying balance
	echo $vinay->DisplayBalance();
?>