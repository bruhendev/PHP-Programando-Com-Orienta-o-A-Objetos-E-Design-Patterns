<?php

require_once 'Conta.php';
require_once 'ContaCorrente.php';
require_once 'ContaPoupanca.php';

$p = new ContaPoupanca('100', '12112', 500);
echo $p->getSaldo() . "\n";

$p->depositar(200);
echo $p->getSaldo() . "\n";

$p->retirar(900);
echo $p->getSaldo() . "\n";
// print_r($p);