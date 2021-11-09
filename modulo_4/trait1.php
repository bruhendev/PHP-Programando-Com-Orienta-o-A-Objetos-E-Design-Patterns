<?php
require_once 'Record.php';

class Produto extends Record
{
    const TABLENAME = 'produto';
}

$p = new Produto;

$p->nome = "Chocolate";
$p->preco = 10;

echo $p->save();
echo "<br>";
echo $p->delete(1);
echo "<br>";
echo $p->load(1);