<?php

$a = 0;
$b = 1;
$i = 0;

while ($i < 10) {
  $c = $a + $b;

  if ($c > 100) {
    break;
  }

  echo $c . "</br>";

  $a = $b;
  $b = $c;
  $i++;
}

