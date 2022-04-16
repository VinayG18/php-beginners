<?php
	
	class BankAccount
	{
		public $balance = 0;
		
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
		
		public function Deposit($amount)
		{
			$this->balance = $this->balance + $amount;
		}		
	}

	// new instance of class
	$vinay = new BankAccount;
	$umesh = new BankAccount;
	
	$vinay->Deposit(2000);
	$umesh->Deposit(1000);
	
	// withdrawing
	$vinay->Withdraw(1200);
	$umesh->Withdraw(700);
	
	// displaying balance
	echo $vinay->DisplayBalance().'<br>';
	echo $umesh->DisplayBalance();
?>