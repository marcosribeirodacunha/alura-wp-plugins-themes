<?php

$age = 15;
$num_of_people = 2;

echo "You only can sign in if you're at least 18 years old or";
echo " at least 16 years old accompanied.";
echo PHP_EOL . PHP_EOL;

/*
  To add more than one condition we can use one of this words/symbols:
    -> or  - ||
    -> and - &&
*/

if ($age >= 18) {
  echo "You're $age years old. You can sign in alone!";
  // we can use both `else if` or `elseif`
} elseif ($age >= 16 and $num_of_people > 1) {
  echo "You're $age years old, you're accompanied, so you can sign in!";
} else
  echo "You're only $age. You can't sign in!";

echo PHP_EOL . PHP_EOL;
echo "Bye";
