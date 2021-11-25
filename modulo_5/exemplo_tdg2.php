<?php
require_once 'classes/tdg/Produto.php';
require_once 'classes/tdg/ProdutoGateway.php';

try {
    // $conn = new PDO('sqlite:/database/estoque.db');
    $conn = new PDO('mysql:host=localhost;dbname=estoque', 'root', '123456');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    Produto::setConnection($conn);

    $produtos = Produto::all();  

    // foreach($produtos as $produto){
    //    $produto->delete();
    // }

    // $produto = new Produto();

    // $produto->descricao = 'Vinho';
    // $produto->estoque = 8;
    // $produto->preco_custo = 12;
    // $produto->preco_venda = 18;
    // $produto->codigo_barras = '123123132456';
    // $produto->data_cadastro = date('Y-m-d');
    // $produto->origem = 'N';

    $outo = Produto::find(1);

    echo '<pre>';
    var_dump($outo);
    $outo->registraCompra(14, 5);
    $outo->save();
    var_dump($outo);

    // $data = new stdClass;

    // ProdutoGateway::setConnection($conn);

    // $data->descricao = 'Vinho';
    // $data->estoque = 8;
    // $data->preco_custo = 12;
    // $data->preco_venda = 18;
    // $data->codigo_barras = '123123132456';
    // $data->data_cadastro = date('Y-m-d');
    // $data->origem = 'N';

    // $gw = new ProdutoGateway;
    // $gw->save($data);

    // $gw = new ProdutoGateway;
    // $produto = $gw->find(1);
    // $produto->estoque += 2;
    // $gw->save($produto);

    // $gw = new ProdutoGateway;
    // foreach ($gw->all('estoque >= 10') as $produto){
    //     print "{$produto->descricao} <br>";
    // }


} catch (Exception $e) {
    print $e->getMessage();
}