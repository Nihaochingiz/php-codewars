<?php
  
function no_space(string $s): string {
 $string = str_replace(' ', '', $s);
  return $string;
}

print(no_space("8 j 8   mBliB8g  imjB8B8  jl  B"));