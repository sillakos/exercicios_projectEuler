<?php

$palindromo =0;

for ($i = 100; $i <= 999; $i++) {
    for ($j = 100; $j <= 999; $j++) {
        $mult = $i * $j;
        $numStr = strval($mult);
        $numRev = strrev($numStr);
        if ($numRev == $numStr) {
            $palindromo = $mult;
            //echo "$i x $j = {$numRev} e {$numStr}" . PHP_EOL;
        }
    }
}

echo $palindromo;
