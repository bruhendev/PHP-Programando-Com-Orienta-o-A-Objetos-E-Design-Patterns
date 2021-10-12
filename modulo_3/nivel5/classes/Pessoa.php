<?php
class Pessoa
{
    private static $conn;

    public static function getConnection()
    {
        if (empty(self::$conn)){
            self::$conn = new PDO('mysql:host=127.0.0.1;port=3306;dbname=livro', 'root', '123456');
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$conn;
    }

    public static function find($id)
    {
        $conn = self::getConnection();

        $result =  $conn->query("SELECT * FROM pessoa WHERE id='{$id}'");
        return $result->fetch();
    }

    public static function delete($id)
    {
        $conn = self::getConnection();

        $result =  $conn->query("DELETE FROM pessoa WHERE id='{$id}'");
        return $result;
    }

    public static function all()
    {
        $conn = self::getConnection();

        $result =  $conn->query("SELECT * FROM pessoa ORDER BY id");
        return $result->fetchAll();
    }

    public static function save($pessoa)
    {
        $conn = self::getConnection();

        $sql = '';
        if (empty($pessoa['id'])) {
            $result = $conn->query("select max(id) as next from pessoa");
            $row = $result->fetch();
            $pessoa['id'] = (int) $row['next'] + 1;

            $sql = "INSERT INTO pessoa (id, nome, endereco, bairro, telefone, email, id_cidade) 
            VALUES ( '{$pessoa['id']}', '{$pessoa['nome']}',
            '{$pessoa['endereco']}', '{$pessoa['bairro']}', '{$pessoa['telefone']}', 
            '{$pessoa['email']}', '{$pessoa['id_cidade']}')";
        } else {
            $sql = "UPDATE pessoa SET nome = '{$pessoa['nome']}',
                          endereco = '{$pessoa['endereco']}',
                          bairro = '{$pessoa['bairro']}',
                          telefone = '{$pessoa['telefone']}',
                          email = '{$pessoa['email']}',
                          id_cidade = '{$pessoa['id_cidade']}'
                WHERE id = '{$pessoa['id']}'";
        }

        $result =  $conn->query($sql);
        return $result->fetch();
    }
}

// echo "<pre>";

// $p = new Pessoa;

// var_dump($p->find(1));
