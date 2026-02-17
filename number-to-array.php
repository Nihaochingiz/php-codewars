<?php

// https://www.codewars.com/kata/5583090cbe83f4fd8c000051/train/php
function digitize(int $n): array{
    return array_map('intval', array_reverse(str_split((string)$n)));
}

var_dump(digitize(35231));

