<?php

use Vios\Exercicio\modelo\MaiorNumeroPrimo;

require_once 'src/modelo/MaiorNumeroPrimo.php';
/*
Os fatores primos de 13195 são 5, 7, 13 e 29.

Qual é o maior fator primo do número 600851475143?
*/
$numero = 600851475143;
$maiorPrimo = new MaiorNumeroPrimo();

echo "O maior fator primo do número {$numero} é {$maiorPrimo->maiorPrimoDe($numero)}";
