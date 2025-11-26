<?php

namespace ScreenMatch\Services;

use ScreenMatch\Model\Titulo;

class CalculadoraDeMaratona
{
    private int $tempoTotalMinutos = 0;

    public function adicionaTitulo(Titulo $titulo): void
    {
        $this->tempoTotalMinutos += $titulo->duracaoEmMinutos();
    }

    public function getTempoTotalMinutos(): int
    {
        return $this->tempoTotalMinutos;
    }
}
