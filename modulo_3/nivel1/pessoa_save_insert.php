<?php
$dados = $_POST;

$conn = mysqli_connect('127.0.0.1', 'root', '123456', 'livro');

$result = mysqli_query($conn, "Select max(id) as next From pessoa");
$row = mysqli_fetch_assoc($result);
$next = (int) $row['next'] + 1;

$sql = "INSERT INTO pessoa (id, nome, endereco, bairro, telefone, email, id_cidade)
    VALUES ('{$next}', '{$dados['nome']}', '{$dados['endereco']}', 
            '{$dados['bairro']}', '{$dados['telefone']}', 
            '{$dados['email']}', '{$dados['id_cidade']}')";

$result = mysqli_query($conn, $sql);

if ($result){
    echo "Registro inserido com sucesso";
}else {
    echo mysqli_error($conn);
}

mysqli_close($conn);