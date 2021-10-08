<?php

class Software
{
    private $id;
    private $nome;
    static $contador;

    public function __construct($nome)
    {
        self::$contador ++;
        $this->id = self::$contador;
        $this->nome = $nome;
    }
}

$s1 = new Software("Gimp");
$s2 = new Software("Gnumeric");

print_r($s1);
print_r($s2);

var_dump(Software::$contador);