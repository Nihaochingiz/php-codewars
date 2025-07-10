<?php

function numberToString(int $num): string {
  $numToString = strval($num); 
  return $numToString;
}

print(numberToString(123));