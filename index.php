
<?php

require 'autoload.php';

use ScreenMatch\Model\Filme;
use ScreenMatch\Model\Genero;
use ScreenMatch\Model\Serie;
use ScreenMatch\Model\Episodio;
use ScreenMatch\Services\CalculadoraDeMaratona;
use ScreenMatch\Services\ConversorNotaEstrela;


echo "Bem-vindo(a) ao screen match!\n";

$filme = new Filme(
    "Top Gun - Maverick",
    2022,
    Genero::Acao,
    130
);

$filme->avalia(10);
$filme->avalia(8);
$filme->avalia(7);
$filme->avalia(5.8);
$filme->avalia(8);

var_dump($filme);

echo $filme->media() . "\n";

$serie = new Serie(
    "Breaking Bad",
    2008,
    Genero::Drama,
    5,
    13,
    47
);

$episodio = new Episodio($serie, 1, "Pilot");

$serie->avalia(10);
$serie->avalia(9.5);
$serie->avalia(8.7);

var_dump($serie);

echo $serie->media() . "\n";

$calculadora = new CalculadoraDeMaratona();
$calculadora->adicionaTitulo($filme);
$calculadora->adicionaTitulo($serie);
$duracao = $calculadora->getTempoTotalMinutos();

echo "Tempo total da maratona: " . $duracao . " minutos\n";

$coneversor = new ConversorNotaEstrela();
echo $coneversor->converte($serie) . " estrelas\n";
echo $coneversor->converte($filme) . " estrelas\n";
