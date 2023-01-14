<?php

$checking_accounts = [
  12345678910 => [
    'holder' => 'Marcos',
    'balance' => 1000
  ],
  76345674911 => [
    'holder' => 'Maria',
    'balance' => 12000
  ],
  84945678910 => [
    'holder' => 'Alberto',
    'balance' => 300
  ]
];

// If we don't need the index of the item we can simple remove the `$cpf =>`
foreach ($checking_accounts as $cpf => $account) {
  echo "User with CPF $cpf: " . $account['holder'] . PHP_EOL;
}
