<?php

$dados = $_GET;

if ($dados['id']) {
    $conn = mysqli_connect('127.0.0.1', 'root', '123456', 'livro');

    $id = (int) $dados['id'];
    $sql = "DELETE FROM pessoa WHERE id = '{$id}'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Registro excluído com sucesso";
    } else {
        echo mysqli_error($conn);
    }

    mysqli_close($conn);
}
