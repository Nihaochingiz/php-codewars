<?php
  
function repeatStr(int $n, string $str): string{
  return str_repeat($str, $n);
}

print(repeatStr(5, 'i'));