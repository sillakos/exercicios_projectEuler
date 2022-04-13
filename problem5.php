<?php

/*
2520 é o menor número que pode ser dividido por cada um dos números de 1 a 10 sem deixar resto.

Qual é o menor número positivo que é divisível por todos os números de 1 a 20? R: 232792560
*/
$numero = 1;
$divisao = 0;
$cont = 1;

while ($cont < 20) {
    for ($i = 1; $i <= 20; $i++) {
        $divisao = $numero / $i;
        if (fmod($numero, $i)) {
            $cont = 0;
        } else {
            $cont++;
            echo "$numero / $i = $divisao" . PHP_EOL;
        }
    }
    $numero++;
}
echo "O maior número devisível por todos os fatores de 1 a 20 é: $numero";
