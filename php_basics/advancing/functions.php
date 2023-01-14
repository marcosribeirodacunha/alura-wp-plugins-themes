<?php

/*
  Subroutines execute all code inside and does NOT return any value
  Functions execute all code inside and then RETURN some value
*/

function show_message(string $message)
{
  echo $message . PHP_EOL;
}

function withdraw(array $account, float $value): array
{
  if ($value > $account['balance']) {
    show_message("You cannot withdraw.");
  } else {
    $account['balance'] -= $value;
  }

  return $account;
}

function deposit(array $account, float $value): array
{
  if ($value > 0) $account['balance'] += $value;
  else show_message("Deposits needs to be positives.");

  return $account;
}

/*
  The "&" signal in the start of the variable alerts PHP we're receiving the
  reference for some value instead of the value.

  Usually we'll pass as values instead of by reference in order to preserve
  security. The use of references will be more common with POO.
*/
function uppercase_holder_name(array &$account)
{
  $account['holder'] = mb_strtoupper($account['holder']);
}


function show_account(array $account)
{
  ['holder' => $holder, 'balance' => $balance] = $account;
  echo "<li>Holder: $holder, Balance: $balance</li>";
}
