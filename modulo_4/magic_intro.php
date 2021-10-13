<?php
class Titulo
{

    private $dt_vencimento;
    private $valor;

    public function __construct($dt_vencimento, $valor)
    {
        $this->dt_vencimento = $dt_vencimento;
        $this->valor = $valor;
        print "Método construtor" . "<br>";
    }

    public function __get($propriedade)
    {
        if ($propriedade == 'valor'){
            return $this->$propriedade * 1.2;
        }
        echo "Tentou acessar a propriedade {$propriedade} <br>";
    }

    public function __set($propriedade, $conteudo)
    {
        if ($propriedade == 'valor'){
            return $this->$propriedade * 1.2;
        }
        echo "Tentou acessar a propriedade {$propriedade} <br>";
    }

    public function setValor($valor)
    {
        # code...
    }

    public function __destruct()
    {
        print "Método destrutor" . "<br>";
    }
}

$t = new Titulo('2018-10-10', 100);
$t->setValor(100);

echo $t->valor . "<br>";
