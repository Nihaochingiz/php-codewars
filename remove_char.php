<?php

function remove_char(string $s): string {
    if (strlen($s) >= 2) {
    
        return substr($s, 1, -1);

    }
    return $s;
}

print(remove_char('eloquent'));