<?php
function findsquares($num) {
 if ($num / 2 === 0) {
        return;
 }
 $smallerInt = (($num - 1) / 2) ** 2;
 $biggerInt = (($num + 1) / 2) ** 2;

 return "{$biggerInt}-{$smallerInt}";
}

 echo(findsquares(9));