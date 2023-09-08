<?php

class Holder
{
	private CPF $cpf;
	private string $name;

	public function __construct(CPF $cpf, string $name)
	{
		$this->cpf = $cpf;
		$this->validateName($name);
		$this->name = $name;
	}

	public function getCpf(): string
	{
		return $this->cpf->getNumber();
	}

	public function getName(): string
	{
		return $this->name;
	}

	private function validateName(string $name): void
	{
		if (strlen($name) < 5) {
			echo "Holder name must have at least 5 characters!";
			exit();
		}
	}
}