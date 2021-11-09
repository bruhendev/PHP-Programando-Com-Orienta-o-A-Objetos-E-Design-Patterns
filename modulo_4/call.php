<?php
class Titulo4
{
    public $codigo, $dt_vencimento, $valor, $juros, $multa;

    public function __call($method, $values)
    {
        // print "Você execultou o método $method " . implode(',', $values);
        return call_user_func($method, get_object_vars($this));
    }
}

$titulo = new Titulo4;
$titulo->codigo = 1;
$titulo->dt_vencimento = "2010-10-10";
$titulo->valor = 100;
$titulo->juros = 0.1;
$titulo->multa = 0.01;

// $titulo->teste1(1, 2, 3);
echo "<pre>";
$titulo->print_r();
echo "<br>";
echo $titulo->count();
echo "<br>";
echo $titulo->json_encode();