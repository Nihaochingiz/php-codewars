<?php
// https://www.codewars.com/kata/5769b3802ae6f8e4890009d2/train/php

function removeEveryOther($array) {
  foreach ($array as $key => $value) {
    
    if ($key % 2 != 0) {
      unset($array[$key]);
    }
  }
  return $array;
}