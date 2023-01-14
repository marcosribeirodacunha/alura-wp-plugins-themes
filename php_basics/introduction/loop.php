<?php

/*
$counter = 1;

while ($counter <= 15) {
  echo "#$counter" . PHP_EOL;
  $counter += 1;
}
*/

for ($counter = 1; $counter <= 15; $counter++) {
  /*
    `continue` will move to the next iteration of the loop;
    `break` will stop the loop iteration;
  */
  if ($counter == 13) continue;

  echo "#$counter" . PHP_EOL;
}
