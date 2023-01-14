<?php

/*
  It'll get all the content of the file and insert here.
  We can also wrap in parentheses as a function or leave without it.

  # `include`
  If the file is not found then just a warn will be thrown and the rest of the
  script will be executed. This is useful when the file is not essential.

  # `require`
  It'll throw a fatal error if the file is not found, stopping the execution

  # `include_once` and `require_once`
  When using the "normal" variations of these functions, if the import is duplicated,
  PHP will try to import without verifying if the imported content already exists.

  When using the `*_once` variations, if the file was already imported then this
  will be ignored.
*/
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

// Remove a variable from the memory
unset($checking_accounts[84945678910]);

uppercase_holder_name($checking_accounts[12345678910]);

foreach ($checking_accounts as $cpf => $account) {
  /*
    To use the `list` on associative arrays we need to "map" the values.
    We can also use the newer syntax which replaces the `list` function to only
    the brackets ([])
  */
  ['holder' => $holder, 'balance' => $balance] = $account;

  /*
    Inside strings we can access the values from associative arrays without
    using the quotation marks.

    It's important to notice that this syntax won't work properly outside
    strings:

    -> `show_message("CPF $cpf: $account[holder] $account[balance]");`

    The other way to use other complex elements inside strings is using interpolation.
    This is called _complex strings_ in PHP (similar to template strings in JS).
    In this case will wrap the element inside {} and use double quotation marks.

    -> `show_message("CPF $cpf: {$account['holder']} {$account['balance']}");`
  */
  show_message("CPF $cpf: $holder $balance");
}
