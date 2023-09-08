<?php

class CPF
{
	private string $number;

	public function __construct(string $value)
	{
		if (!preg_match('/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/', $value)) {
			echo 'Invalid CPF' . PHP_EOL;
			exit();
		}

		$this->number = $value;
	}

	public function getNumber(): string
	{
		return $this->number;
	}
}