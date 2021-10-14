<?php
class Titulo2
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


}

$t = new Titulo2;
$t->valor = 100;
$t->nome = "teste";
echo $t->valor . "<br>";
echo '<pre>';
var_dump($t);

if (isset($t->valor)){
    echo "Tem valor";
}
 