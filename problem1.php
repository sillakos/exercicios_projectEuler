<?php

/*Se listarmos todos os números naturais abaixo de 10 que são múltiplos de 3 ou 5, obtemos 3, 5, 6 e 9.
A soma desses múltiplos é 23.

Encontre a soma de todos os múltiplos de 3 ou 5 abaixo de 1000.*/
$somaTres = 0;
$somaCinco = 0;
$quantParaSoma = 10;

for ($i = 1; $i < $quantParaSoma; $i++) {
    if ($i * 3 < $quantParaSoma) {
        $multTres = $i * 3;
        $somaTres += $multTres;
    }
    if ($i * 5 < $quantParaSoma) {
        $multCinco = $i * 5;
        $somaCinco += $multCinco;
    }
}
echo $somaTres + $somaCinco;
