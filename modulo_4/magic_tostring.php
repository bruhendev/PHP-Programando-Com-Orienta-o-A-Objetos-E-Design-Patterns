<?php
class Titulo3
{
    private $data;

    public function __set($propriedade, $valor)
    {
        $this->data[$propriedade] = $valor;
    }

    public function __get($propriedade)
    {
        return $this->data[$propriedade];
    }

    public function __isset($propriedade)
    {
        return isset($this->data[$propriedade]);
    }

    public function __unset($propriedade)
    {
        unset($this->data[$propriedade]);
    }

    public function __toString()
    {
        return json_encode($this->data);
    }
}

$t = new Titulo3;
$t->valor = 100;
$t->nome = "teste";
echo $t->valor . "<br>";
echo '<pre>';
var_dump($t);

if (isset($t->valor)) {
    echo "Tem valor";
}

echo $t;
