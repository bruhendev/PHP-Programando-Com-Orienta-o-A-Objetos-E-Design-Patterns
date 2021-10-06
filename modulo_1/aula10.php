<?php 

$salario = 1000;
$tempo = 12;

if ( ($salario <= 1000) AND ($tempo >= 12) ) {
    print "promoção\n";
} else {
    print "sem promoção\n";
}

$valor = 10;

$resultado = $valor >= 100 ? "muito caro": "pode comprar";

print $resultado."\n";

$lista = ['maçã', 'pêra', 'uva', 'banana'];

foreach($lista as $fruta) {
    echo $fruta . "\n";
}