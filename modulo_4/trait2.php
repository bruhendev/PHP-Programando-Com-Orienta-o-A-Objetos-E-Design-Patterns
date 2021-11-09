<?php

require_once 'Record.php';

class Produto extends Record
{
    const TABLENAME = 'produto';
    use ObjectConversionTrait;
}


trait ObjectConversionTrait
{
    public function toXML()
    {
        $xml = new SimpleXMLElement('<' . get_class($this) . '/>');
        foreach ($this->data as $key => $value)
        {
            $xml->addChild($key, $value);
        }
        return $xml->asXML();
    }

    public function toJSOM()
    {
        return json_encode($this->data);
    }
}

$p = new Produto;

$p->nome = "Chocolate";
$p->preco = 10;

echo $p->save();
echo "<br>";
echo $p->delete(1);
echo "<br>";
echo $p->load(1);