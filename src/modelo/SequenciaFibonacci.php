<?php

namespace Vios\Exercicio\modelo;

class SequenciaFibonacci
{
    private $ultimo = 1;
    private $penultimo = 0;
    private $atual = 0;

    public function sequencia(int $contador): array
    {
        $lista = [];

        while (($contador - 1) >= 0) {
            $this->atual = $this->ultimo + $this->penultimo;
            $lista[] = $this->atual;
            $this->penultimo = $this->ultimo;
            $this->ultimo = $this->atual;

            $contador--;
        }

        return $lista;
    }
}
