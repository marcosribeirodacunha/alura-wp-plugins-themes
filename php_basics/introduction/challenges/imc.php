<?php

$height = 1.80;
$weight = 93;

$imc = $weight / ($height ** 2);

echo "Your IMC are $imc Kg/m2" . PHP_EOL;
echo "Your classification is: ";

if ($imc < 18.5) {
  echo "SLIM";
} elseif ($imc >= 18.5 && $imc < 25) {
  echo "NORMAL";
} elseif ($imc >= 25 && $imc < 30) {
  echo "OVERWEIGHT";
} elseif ($imc >= 30 && $imc < 40) {
  echo "OBESITY";
} else {
  echo "SEVERE OBESITY";
}
