<?php

// declare(strict_types=1);

//Tipagem php, o php tem tipagem dinamica conforme o valor inseido na execução

$codigo = 5.5;
var_dump($codigo);

// Pordemos forçar algumas coisas

function calculaImc(float $peso, float $altura): float
{
    return $peso / ($altura * $altura);
}

var_dump(calculaImc(84, 1.8));
echo "\n";