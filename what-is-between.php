<?php

//https://www.codewars.com/kata/55ecd718f46fba02e5000029/train/php


function between(int $a, int $b): array {

    $numberArr = [];

    for ($i = $a; $i <=  $b; $i++) { 
        $numberArr[] = $i;
    }
        return $numberArr;
}