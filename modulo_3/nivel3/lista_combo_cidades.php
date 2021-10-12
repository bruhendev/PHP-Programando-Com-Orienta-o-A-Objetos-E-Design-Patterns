<?php

function lista_combo_cidades( $id_cidade = null )
{
    $conn = mysqli_connect('127.0.0.1', 'root', '123456', 'livro');

    $query = "SELECT id, nome FROM cidade";
    $result = mysqli_query($conn, $query);
    $output = '';

    if($result){
        while ($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $nome = $row['nome'];
            $check = ($id == $id_cidade) ? 'selected=1' : '';
            $output .= "<option {$check} value='{$id}'>{$nome}</option>";
        }
    }

    mysqli_close($conn);
    return $output;
}
