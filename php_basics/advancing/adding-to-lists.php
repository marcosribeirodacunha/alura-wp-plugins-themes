<?php

// Adding to the end of the array

$ages = [21, 23, 15, 64, 34, 53];

// Adding without passing the index will append to the end of the array
$ages[] = 20;

foreach ($ages as $age) {
  echo "Age: $age" . PHP_EOL;
}


//------------------------------------------------------------------------------
echo '----------------' . PHP_EOL;

// Another way to add in Associative Arrays

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

$checking_accounts[98734576102] = [
  'holder' => 'Claudia',
  'balance' => 2000
];

/*
  If we do not add a index here, it'll be incremented the last index value

  It's important to notice that if it is an associative array with string values
  as index, the next index value will be 0.
  In this case will be important to pass the key of the index to be associated with.
*/
$checking_accounts[] = [
  'holder' => 'João',
  'balance' => 1500
];

foreach ($checking_accounts as $cpf => $account) {
  echo "CPF $cpf: " . $account['holder'] . PHP_EOL;
}
