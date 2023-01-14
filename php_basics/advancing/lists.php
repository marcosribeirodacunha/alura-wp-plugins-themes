<?php

// $ages = array(21, 23, 15, 64, 34, 53);
$ages = [23, 21, 15, 64, 34, 53];

/*
  Using the `list` is the same as doing:

  $age_marcos = $age[0];
  $age_joao = $age[1];

  This is similar to the "object destructuring" in JS.
  We can also skip values leaving a blank space as we do in JS
*/
list($age_marcos, $age_joao) = $ages;

$some_age = $ages[4];
echo $some_age;
