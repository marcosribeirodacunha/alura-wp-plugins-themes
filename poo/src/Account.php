<?php

class Account
{
	private static int $account_count = 0;
	private Holder $holder;
	private float  $balance;

	public function __construct(Holder $holder)
	{
		$this->holder  = $holder;
		$this->balance = 0;

		self::$account_count++; // Class attribute (static)
	}

	public function __destruct()
	{
		self::$account_count--;
	}

	public function withdraw(float $value): void
	{
		if ($value > $this->balance) {
			echo "Value unavailable";
			return;
		}
		
		$this->balance -= $value;
	}

	public function deposit(float $value): void
	{
		if ($value < 0) {
			echo "Value must be positive";
			return;
		}
		
		$this->balance += $value;
	}

	public function transfer(float $value, Account $destination_account): void
	{
		if ($value > $this->balance) {
			echo "Value unavailable";
			return;
		}
		
		$this->balance += $value;
		$destination_account->deposit($value);
	}

	public function getBalance(): float
	{
		return $this->balance;
	}

	public function getHolderName(): string
	{
		return $this->holder->getName();
	}

	public function getHolderCPF(): string
	{
		return $this->holder->getCpf();
	}

	public static function getAccountCount(): int
	{
		return self::$account_count;
	}
}