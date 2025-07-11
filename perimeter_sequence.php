<?php
const FOURTH_STAGE = 4;


function perimeter_sequence(int $a, int $n): int {
 return  FOURTH_STAGE * $n *  $a;
}

print(perimeter_sequence(5,10));