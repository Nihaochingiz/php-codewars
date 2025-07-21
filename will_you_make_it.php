<?php
  
function zeroFuel(int $distanceToPump, int $mpg, int $fuelLeft): bool {
  $canRunMiles = $mpg * $fuelLeft;
  return $distanceToPump <=  $canRunMiles;
}

echo(zeroFuel(50,25,2));
