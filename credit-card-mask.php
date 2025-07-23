<?php
  
function maskify(string $cc): string {
$cc_length = strlen($cc);

  if ($cc == "") {
    return "";
  }
  else if ($cc_length === 1) {
    return $cc;
  }

  for ($i = 0;  $i < $cc_length - 4; $i++) {
    
        $cc[$i] = '#';
  }
  return $cc;
  
}

echo(maskify("4556364607935616"));
echo(maskify("1"));
echo(maskify(""));
echo(strlen("1"));