<?php
class ProdutoGateway
{

    private static $conn;

    public static function setConnection(PDO $conn)
    {
        self::$conn = $conn;
    }

    public function find($id, $class = 'stdClass')
    {
        $sql = "SELECT * FROM produto WHERE id = '$id'";
        print "$sql <br>";
        $result = self::$conn->query($sql);
        return $result->fetchObject($class);
    }

    public function all($filter, $class = 'stdClass')
    {
        $sql = "SELECT * FROM produto ";
        if ($filter) {
            $sql .= " WHERE $filter ";
        }
        print "$sql <br>";
        $result = self::$conn->query($sql);
        return $result->fetchAll(PDO::FETCH_CLASS, $class);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM produto WHERE id = '$id'";
        print "$sql <br>";
        return $result = self::$conn->query($sql);
    }

    public function save($data)
    {
        if (empty($data->id)) {
            $id = $this->getLastId() + 1;
            $sql = "INSERT INTO produto
                (id, descricao, estoque, preco_custo, preco_venda, codigo_barras, 
                 data_cadastro, origem)
            VALUES
                ('{$id}',
                 '{$data->descricao}',
                 '{$data->estoque}',
                 '{$data->preco_custo}',
                 '{$data->preco_venda}',
                 '{$data->codigo_barras}',
                 '{$data->data_cadastro}',
                 '{$data->origem}')";
        } else {
            $sql = "";
        }
    }

    public function getLastId()
    {
        return 0;
    }
}