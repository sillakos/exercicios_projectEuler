<?php

namespace Vios\Exercicio\modelo;

class MaiorNumeroPrimo
{

    function maiorPrimoDe(int $numero): int
    {
        $fatorPrimo = 0;
        $atual = 0;

        for ($i = 1; $i <= $numero; $i++) {
            $divisao = $numero / $i;

            if (fmod($atual, $i)) {
                continue;
            } else {
                $fatorPrimo = $i;
            }
            $atual = $divisao;
            $numero = $atual;
        }
        return $fatorPrimo;
    }
}
