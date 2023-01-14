<?php

/*
  Associative Array
  We have a name which maps to a value
  [name => value]
*/

$account_1 = [
  'holder' => 'Marcos',
  'balance' => 1000
];

$account_2 = [
  'holder' => 'Maria',
  'balance' => 12000
];

$account_3 = [
  'holder' => 'Alberto',
  'balance' => 300
];

$checking_accounts = [$account_1, $account_2, $account_3];

for ($i = 0; $i < count($checking_accounts); $i++) {
  echo $checking_accounts[$i]['holder'] . PHP_EOL;
}
