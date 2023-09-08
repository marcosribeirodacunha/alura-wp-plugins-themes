<?php

require_once 'src/CPF.php';
require_once 'src/Holder.php';
require_once 'src/Account.php';

$marcos = new Holder(new CPF('123.456.789-10'), 'Marcos');
$first_account = new Account($marcos);
print_r($first_account);

$first_account->deposit(500);
$first_account->withdraw(300);

$second_account = new Account(new Holder(new CPF('123.456.789-10'), 'Jane Doe'));
$third_account  = new Account(new Holder(new CPF('123.456.789-10'), 'John Doe'));

echo '[First Account] Holder Name: ' . $first_account->getHolderName() . PHP_EOL;
echo '[First Account] Holder CPF: ' . $first_account->getHolderCPF() . PHP_EOL;
echo '[First Account] Balance: ' . $first_account->getBalance() . PHP_EOL;
echo PHP_EOL;

new Account(new Holder(new CPF('123.456.789-10'), 'Fulano'));
unset($first_account);
echo 'Account count: ' . Account::getAccountCount();

echo PHP_EOL;