<?php

class Pessoa1
{
    private $nome;
    private $endereco;
    private $nascimento;

    public function __construct($nome, $endereco)
    {
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    public function setNascimento($nascimento)
    {
        $partes = explode('-', $nascimento);
        if (count($partes) == 3) {
            if (checkdate($partes[1], $partes[2], $partes[0]));
            $this->nascimento = $nascimento;
            return true;
        }
        return false;
    }
}

$p1 = new Pessoa1("Maria da silva", "Rua castelo branco");
$ok1 = $p1->setNascimento("01 de Maio de 1990");
$ok2 = $p1->setNascimento("1990-05-01");

var_dump($ok1);
var_dump($ok2);
print_r($p1);

// print_r($p1);