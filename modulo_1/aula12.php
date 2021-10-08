<?php

function calcula_imc(float $peso, float $altura): float
{
    return $peso / ($altura * $altura);
}

echo calcula_imc(80, 1.78);