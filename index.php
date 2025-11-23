<?php

require __DIR__ . "/src/Model/Genero.php";
require __DIR__ . "/src/Model/Filme.php";


echo "Bem-vindo(a) ao screen match!\n";

$filme = new Filme(
    "Top Gun - Maverick",
    2022,
    Genero::Acao,
);

$filme->avalia(10);
$filme->avalia(8);
$filme->avalia(7);
$filme->avalia(5.8);
$filme->avalia(8);

var_dump($filme);

echo $filme->media() . "\n";
