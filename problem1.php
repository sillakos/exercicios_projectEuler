<?php

/*Se listarmos todos os números naturais abaixo de 10 que são múltiplos de 3 ou 5, obtemos 3, 5, 6 e 9.
A soma desses múltiplos é 23.

Encontre a soma de todos os múltiplos de 3 ou 5 abaixo de 1000.*/

function multiplosDe(int $multiplicador): int
{
    $soma = 0;
    $contador = 10;
    for ($i = 0; $i < $contador; $i++) {
        if (($i * $multiplicador) < $contador) {
            $multiplos = $i * $multiplicador;
            $soma += $multiplos;
        }
    }
    return $soma;
}

$multiplos3 = multiplosDe(3);
$multiplos5 = multiplosDe(5);

echo $multiplos3 + $multiplos5;
