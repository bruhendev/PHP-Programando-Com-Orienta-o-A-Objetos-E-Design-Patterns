<?php
require_once 'classes/api/Transaction.php';
require_once 'classes/api/Connection.php';
require_once 'classes/ar/ProdutoComTransacao.php';

try {
    Transaction::open('estoque');

    $produto = new Produto;
    $produto->descricao = 'Arroz';
    $produto->estoque = 300;
    $produto->preco_custo = 11;
    $produto->preco_venda = 17;
    $produto->codigo_barras = '1231231323721';
    $produto->data_cadastro = date("Y-m-d");
    $produto->origem = "N";
    $produto->save();

    Transaction::close();
} catch (Exception $e) {

    Transaction::rollback();
    print $e->getMessage();
}
