<?php
class Titulo4
{
    public $codigo, $dt_vencimento, $valor, $juros, $multa;
}

$titulo = new Titulo4;
$titulo->codigo = 1;
$titulo->dt_vencimento = "2010-10-10";
$titulo->valor = 100;
$titulo->juros = 0.1;
$titulo->multa = 0.01;

$titulo2 = clone $titulo;
$titulo2->valor = 200;

echo "<pre>";
var_dump($titulo);
var_dump($titulo2);