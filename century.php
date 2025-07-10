<?php
// https://www.codewars.com/kata/5a3fe3dde1ce0e8ed6000097/train/php

function centuryFromYear(int $year): int {
    return (int)ceil($year / 100);
}


echo(centuryFromYear(1900));
//echo(centuryFromYear(1900));