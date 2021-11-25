<?php
require_once "classes/ar/Produto.php";
try {
    // $conn = new PDO('sqlite:database/estoque.db');
    $conn = new PDO('mysql:host=localhost;dbname=estoque', 'root', '123456');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    Produto::setConnection($conn);

    $produto = Produto::find(1);

    echo "<pre>";
    var_dump($produto);

    $produto2 = new Produto();

    $produto2->descricao = 'Café';
    $produto2->estoque = 50;
    $produto2->preco_custo = 2;
    $produto2->preco_venda = 3;
    $produto2->codigo_barras = '183123138456';
    $produto2->data_cadastro = date('Y-m-d');
    $produto2->origem = 'N';

    $produto2->save();

    foreach(Produto::all() as $p){
        echo "{$p->descricao} <br>";
    }



} catch (Exception $e) {
    print $e->getMessage();
}