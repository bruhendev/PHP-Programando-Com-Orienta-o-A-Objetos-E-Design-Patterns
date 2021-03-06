<?php
require_once 'classes/ar/Produto.php';
require_once 'classes/api/Connection.php';

try {
    $conn = Connection::open('estoque');
    Produto::setConnection($conn);

    $produto = new Produto();
    $produto->descricao = 'Café torrado';
    $produto->estoque = 100;
    $produto->preco_custo = 4;
    $produto->preco_venda = 7;
    $produto->codigo_barras = '123123132321';
    $produto->data_cadastro = date("Y-m-d");
    $produto->origem = "N";
    $produto->save();
} catch (Exception $e) {
    print $e->getMessage();
}
