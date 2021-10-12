<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <title>Cadastro de Pessoa</title>
</head>
<body>
    <form action="pessoa_save_insert.php" method="post" enctype="multipart/form-data">
        <label for="">Código</label>
        <input type="text" name="id" readonly="1" style="width: 30%;">

        <label for="">Nome</label>
        <input type="text" name="nome" style="width: 50%;">

        <label for="">Endereço</label>
        <input type="text" name="endereco" style="width: 50%;">

        <label for="">Bairro</label>
        <input type="text" name="bairro" style="width: 25%;">

        <label for="">Telefone</label>
        <input type="text" name="telefone" style="width: 25%;">

        <label for="">Email</label>
        <input type="text" name="email" style="width: 25%;">

        <label for="">Cidade</label>
        <select name="id_cidade">
            <?php
                require_once 'lista_combo_cidades.php';
                echo lista_combo_cidades();
            ?>
        </select>

        <input type="submit">
    </form>
</body>
</html>