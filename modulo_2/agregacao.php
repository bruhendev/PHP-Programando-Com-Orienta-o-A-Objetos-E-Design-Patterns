<?php

require_once 'cesta.php';
require_once 'produto.php';

$c1 = new Cesta;

$p1 = new Produto('Chocolate', 10, 5);
$p2 = new Produto('Café', 100, 2);
$p3 = new Produto('Açucar', 78, 4);

$c1->addItem($p1);
$c1->addItem($p2);
$c1->addItem($p3);

print_r($c1);