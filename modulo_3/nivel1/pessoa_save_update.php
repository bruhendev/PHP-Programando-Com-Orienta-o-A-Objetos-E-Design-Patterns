<?php

$dados = $_POST;

if ($dados['id']) {
    $conn = mysqli_connect('127.0.0.1', 'root', '123456', 'livro');

    $sql = "UPDATE pessoa SET nome      = '{$dados['nome']}',
                              endereco  = '{$dados['endereco']}',
                              bairro    = '{$dados['bairro']}',
                              telefone  = '{$dados['telefone']}',
                              email     = '{$dados['email']}',
                              id_cidade = '{$dados['id_cidade']}'
                              WHERE id = '{$dados['id']}'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Registro atualizado com sucesso";
    } else {
        echo mysqli_error($conn);
    }

    mysqli_close($conn);
}
