<?php

namespace ScreenMatch\Model;

interface Avaliavel
{
    function avalia(float $nota): void;

    function media(): float;
}