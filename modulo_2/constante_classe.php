<?php

class Pessoa
{
    private $nome;
    private $genero;
    const GENEROS = ['M' => "Masculino", "F" => "Feminino"];

    public function __construct($nome, $genero)
    {
        $this->nome = $nome;
        $this->genero = $genero;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getNomeGenero()
    {
        return self::GENEROS[$this->genero];
    }
}

$p1 = new Pessoa("Maria", "F");
$p2 = new Pessoa("Carlos", "M");

print "Nome: {$p1->getNome()} - Genero: {$p1->getNomeGenero()}\n";
print "Nome: {$p2->getNome()} - Genero: {$p2->getNomeGenero()}\n";

print_r(Pessoa::GENEROS);
