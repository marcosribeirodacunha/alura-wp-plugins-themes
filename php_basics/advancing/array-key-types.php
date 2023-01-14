<?php

/*
  PHP can only work with numeric and strings as array keys in associative arrays.
  Any other value beyond that will be converted
*/

$array = [
  1 => 'a',
  '1' => 'b', // number as string will be converted to numeric
  1.5 => 'c', // float will convert to numeric
  true => 'd', // boolean will convert true to 1 and false to 0
  'anything' => 'e',
];

foreach ($array as $item) {
  echo $item . PHP_EOL;
}
