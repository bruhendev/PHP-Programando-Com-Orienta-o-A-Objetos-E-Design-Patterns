<?php

class Funcionario2
{
    public $nome;
    public $telefone;
    public $salario;
    public $idade;

    public function getNome()
    {
    }
    public function getTelefone()
    {
    }
    public function getSalario()
    {
    }
    public function getIdade()
    {
    }
}

class Estagiario extends Funcionario2
{
}

print_r(get_class_methods('Funcionario2'));

$f1 = new Funcionario2;

$f1->nome = "Bruno";
$f1->telefone = "12131233";
$f1->salario = "1000";
$f1->idade = "18";

print_r(get_object_vars($f1));

$joao = new Estagiario;
$jose = new Funcionario2;

print get_class($joao) . "\n";
print get_class($jose) . "\n";
print get_parent_class($joao) . "\n";
print get_parent_class('Estagiario') . "\n";
var_dump(is_subclass_of($joao, "Funcionario2"));
var_dump(is_subclass_of("Estagiario", "Funcionario2"));

if (method_exists($jose, 'setNome')){
    echo "Existe o setNome\n";
}else{
    echo "Não existe o setNome\n";
}

if (method_exists($jose, 'getNome')){
    echo "Existe o getNome\n";
}else{
    echo "Não existe o getNome\n";
}
