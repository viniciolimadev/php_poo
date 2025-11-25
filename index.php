
<?php

require __DIR__ . "/src/Model/Titulo.php";
require __DIR__ . "/src/Model/Genero.php";
require __DIR__ . "/src/Model/Filme.php";
require __DIR__ . "/src/Model/Serie.php";
require __DIR__ . "/src/Services/CalculadoraDeMaratona.php";


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

