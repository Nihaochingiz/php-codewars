<?php

function even_or_odd(int $n): string {
  if ($n % 2 === 0) {
    return 'Even';
  }
  return 'Odd';
}

print(even_or_odd(3));