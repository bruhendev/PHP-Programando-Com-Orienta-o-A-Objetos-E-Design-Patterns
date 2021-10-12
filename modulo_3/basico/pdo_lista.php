<?php

try {
    $conn = new PDO('mysql:host=127.0.0.1;port=3306;dbname=livro', 'root', '123456');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $result = $conn->query("SELECT * FROM famosos");

    if($result){
        while ($row = $result->fetchObject()){
            echo $row->codigo . " - " . $row->nome . "<br>";
        }
    }

    $conn = null;
} catch (PDOException $e) {
    echo $e->getMessage();
}
