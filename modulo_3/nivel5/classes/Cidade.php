<?php
class Cidade
{
    public static function all()
    {
        $conn = new PDO('mysql:host=127.0.0.1;port=3306;dbname=livro', 'root', '123456');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $result =  $conn->query("SELECT * FROM cidade ORDER BY id");
        return $result->fetchAll();
    }
}
