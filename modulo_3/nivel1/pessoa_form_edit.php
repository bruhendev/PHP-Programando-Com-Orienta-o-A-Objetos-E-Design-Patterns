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

    <?php
    if (!empty($_GET['id'])) {
        $conn = mysqli_connect('127.0.0.1', 'root', '123456', 'livro');
        $id = (int) $_GET['id'];
        $result = mysqli_query($conn, "SELECT * FROM pessoa WHERE id='{$id}'");
        $row = mysqli_fetch_assoc($result);

        $id = $row['id'];
        $nome = $row['nome'];
        $endereco = $row['endereco'];
        $bairro = $row['bairro'];
        $telefone = $row['telefone'];
        $email = $row['email'];
        $id_cidade = $row['id_cidade'];
    }
    ?>

    <form action="pessoa_save_update.php" method="post" enctype="multipart/form-data">
        <label for="">Código</label>
        <input value="<?= $id ?>" type="text" name="id" readonly="1" style="width: 30%;">

        <label for="">Nome</label>
        <input value="<?= $nome ?>" type="text" name="nome" style="width: 50%;">

        <label for="">Endereço</label>
        <input value="<?= $endereco ?>" type="text" name="endereco" style="width: 50%;">

        <label for="">Bairro</label>
        <input value="<?= $bairro ?>" type="text" name="bairro" style="width: 25%;">

        <label for="">Telefone</label>
        <input value="<?= $telefone ?>" type="text" name="telefone" style="width: 25%;">

        <label for="">Email</label>
        <input value="<?= $email ?>" type="text" name="email" style="width: 25%;">

        <label for="">Cidade</label>
        <select name="id_cidade">
            <?php
            require_once 'lista_combo_cidades.php';
            echo lista_combo_cidades($id_cidade);
            ?>
        </select>

        <input type="submit">
    </form>
</body>

</html>