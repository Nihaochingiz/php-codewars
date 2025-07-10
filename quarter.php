<?php
//https://www.codewars.com/kata/5ce9c1000bab0b001134f5af/train/php

function quarterOf($month) {
  return ceil($month / 3);
}
echo(quarterOf(2));
echo(quarterOf(6));