<?php

require_once 'fabricante.php';
require_once 'produto.php';

$p1 = new Produto("Chocolate", 10, 7);
$f1 = new Fabricante("Garoto", "Rual tal...", '98989644');

$p1->setFabricante($f1);

print "O Fabricante do produto {$p1->getDescricao()} é {$p1->getFabricante()->getNome()}\n";

// print_r($p1);
// var_dump($f1);