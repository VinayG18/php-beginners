<?php
	
	class BankAccount
	{
		public $balance = 0;
		public $type = '';
		
		public function setType($input)
		{
			$this->type = $input;
		}
		
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
	
	
	class SavingsAccount extends BankAccount
	{
	
	}
	
	$vinay = new BankAccount;
	$vinay->setType('18-25 Current');
	$vinay->Deposit(1000);
	$vinay->Withdraw(500);
	
	$vinay_savings = new SavingsAccount;
	$vinay_savings->setType('Super Saver');
	$vinay_savings->Deposit(4000);
	
	echo $vinay->type.' has '.$vinay->DisplayBalance().'<br>';
	echo $vinay_savings->type.' has '.$vinay_savings->DisplayBalance();
?>