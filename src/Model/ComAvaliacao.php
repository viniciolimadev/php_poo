<?php

namespace ScreenMatch\Model;

trait ComAvaliacao
{
    private array $notas = [];

    public function avalia(float $nota): void
    {
        $this->notas[] = $nota;
    }

    public function media(): float
    {
        $soma = array_sum($this->notas);
        $total = count($this->notas);
        return $total === 0 ? 0 : $soma / $total;
    }
}