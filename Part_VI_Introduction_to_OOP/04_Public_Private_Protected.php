<?php

	class BankAccount
	{
		private $balance = 3500;
		
		public function DisplayBalance()
		{
			return $this->balance;
		}
	}

	$a = new BankAccount;
	echo $a->DisplayBalance();
	//echo $a->balance;


?>