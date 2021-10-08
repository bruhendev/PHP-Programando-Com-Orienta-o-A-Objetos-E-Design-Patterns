<?php

function apresenta($nome)
{
    print "Olá $nome\n";
}

// apresenta("Bruno");
$funcao = 'apresenta';

call_user_func($funcao, "Bruno");

class PessoaNome
{
    static function apresenta($nome)
    {
        print "Olá $nome\n";
    }
}

$classe = "PessoaNome";
$metodo = "apresenta";

call_user_func([$classe, $metodo], "Bruno");

$obj = new PessoaNome;

call_user_func([$obj, $metodo], "Bruno");
