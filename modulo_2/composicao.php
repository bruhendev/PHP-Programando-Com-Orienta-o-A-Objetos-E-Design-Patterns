<?php

require_once 'fabricante.php';
require_once 'produto.php';
require_once 'caracteristica.php';

$p1 = new Produto('Chocolate', 10, 7);

$p1->addCaracteristicas('Cor', 'Branco');
$p1->addCaracteristicas('Peso', '500gr');

print_r($p1);