<?php

namespace ScreenMatch\Services;

use ScreenMatch\Model\Avaliavel;

class ConversorNotaEstrela
{
    public function converte(Avaliavel $avaliavel): float
    {
        $nota = $avaliavel->media();

        //realiza a conversão da nota para o sistema de estrelas

        return round($nota) / 2;
    }
}
