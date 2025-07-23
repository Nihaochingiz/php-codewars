<?php

function createPhoneNumber($numbersArray) {
      if (count($numbers) != 10) {
        return "Invalid input: Array must contain exactly 10 numbers.";
    }
        return sprintf("(%d%d%d) %d%d%d-%d%d%d%d", ...$numbers);
}

echo(createPhoneNumber([1,2,3,4,5,6,7,8,9,0]));