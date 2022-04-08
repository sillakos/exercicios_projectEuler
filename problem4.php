<?php

/*
Um número palindrômico lê da mesma forma nos dois sentidos.
O maior palíndromo feito do produto de dois números de 2 dígitos é 9009 = 91 × 99.

Encontre o maior palíndromo feito do produto de dois números de 3 algarismos.
*/

function MaiorPalindromoDeTresNumeros(): int
{
    $palindromo = 0;

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
    return $palindromo;
}

$maiorPalindromo = MaiorPalindromoDeTresNumeros();
echo $maiorPalindromo;
