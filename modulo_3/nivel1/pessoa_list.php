<!DOCTYPE html>
<html lang="ptbr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/list.css">
    <title>Listagem de Pessoas</title>
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th>Id</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Bairro</th>
                <th>Telefone</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $conn = mysqli_connect('127.0.0.1', 'root', '123456', 'livro');
            $query = "SELECT * FROM pessoa ORDER BY id";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $nome = $row['nome'];
                $endereco = $row['endereco'];
                $bairro = $row['bairro'];
                $telefone = $row['telefone'];
                $email = $row['email'];
                $id_cidade = $row['id_cidade'];

                echo "<tr>";
                echo "<td> <a class=\"editar\" href='pessoa_form_edit.php?id={$id}'>Editar</a> </td>";
                echo "<td> <a class=\"excluir\" href='pessoa_delete.php?id={$id}'>Excluir</a> </td>";
                echo "<td>{$id}</td>";
                echo "<td>{$nome}</td>";
                echo "<td>{$endereco}</td>";
                echo "<td>{$bairro}</td>";
                echo "<td>{$telefone}</td>";
                echo "<td>{$email}</td>";
                echo "</tr>";
            }
            ?>

        </tbody>
    </table>
    <button onclick="window.location='pessoa_form_insert.php'">Inserir</button>
</body>

</html>