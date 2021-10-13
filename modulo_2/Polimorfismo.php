<?php

require_once 'Conta.php';
require_once 'ContaCorrente.php';
require_once 'ContaPoupanca.php';

$contas = [];
$contas[] = new ContaCorrente(1234, 'CC.1234', 100, 500);
$contas[] = new ContaPoupanca(1235, 'PP.1235', 100);

foreach ($contas as $conta)
{
    if ($conta instanceof Conta){
        print_r($conta->getInfo() . "\n");
        print_r("--Saldo atual " . $conta->getSaldo() . "\n");

        $conta->depositar(200);
        print_r("--Deposito de 200\n");
        print_r("--Saldo atual " . $conta->getSaldo() . "\n");

        if ($conta ->retirar(700)){
            print_r ("-- Retirada de 700 (OK)\n");
        }else {
            print_r ("-- Retirada de 700 (Não Permitida)\n");
        }
        print_r("--Saldo atual " . $conta->getSaldo() . "\n");
    }
}