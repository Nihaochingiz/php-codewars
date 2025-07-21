<?php

function euclidean_distance(array $a, array $b): float {
  $sum = 0;

  foreach($a as $i => $value) {
        $sum +=pow($value - $b[$i], 2);
  }
  return round(sqrt($sum), 2);
}

echo(euclidean_distance([-1, 2, 5], [2, 4, 9]));