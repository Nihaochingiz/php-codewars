<?php
  
function digits(int $n): int {
  $array = str_split($n);
  return  count($array);
}

print(digits(128685));