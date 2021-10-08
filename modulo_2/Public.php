<?php

class Pessoa {
    public $nome;
    public $endereco;
    public $nascimento;
}

$p1 = new Pessoa;

$p1->nome = "Maria da silva";
$p1->endereco = "Rua castelo branco";
$p1->nascimento = "01 de Maio de 1990";

print_r($p1);