<?php

$age = 23;
$salary = 1000.301;
$division = 10 / 30;
$division = 3;

$text = "Hello World";

$true = true;
$false = false;

function print_with_type($variable)
{

  $type = gettype($variable);
  $value = json_encode($variable);

  echo $value . ' - ' . $type . PHP_EOL;
};

print_with_type($age);
print_with_type($salary);
print_with_type($division);

print_with_type($text);

print_with_type($true);
print_with_type($false);
