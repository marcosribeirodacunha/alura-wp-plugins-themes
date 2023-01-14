<?php

require_once 'functions.php';

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

$checking_accounts[76345674911] = withdraw($checking_accounts[76345674911], 500);
$checking_accounts[84945678910] = withdraw($checking_accounts[84945678910], 200);
$checking_accounts[12345678910] = deposit($checking_accounts[12345678910], 100);

unset($checking_accounts[84945678910]);

uppercase_holder_name($checking_accounts[12345678910]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bank</title>
</head>

<body>
  <h1>Checking Accounts</h1>
  <dl>
    <?php foreach ($checking_accounts as $cpf => $account) { ?>
      <dt>
        <h3><?= "{$account['holder']} - $cpf;" ?></h3>
      </dt>
      <dt>Balance: <?= $account['balance']; ?></dt>
    <?php } ?>
  </dl>
</body>

</html>
