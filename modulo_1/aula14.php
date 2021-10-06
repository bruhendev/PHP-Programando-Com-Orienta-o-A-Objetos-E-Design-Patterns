<?php 

//Vetores

// $cores = array('amarelo', 'azul', 'verde', 'preto', 'branco');
$cores = ['amarelo', 'azul', 'verde', 'preto', 'branco'];


print_r($cores);
print_r($cores[3]);
echo "\n";

$cores[] = "roxo";
print_r($cores);

$pessoa = ['nome' => 'Bruno', 'idade' => 20, 'telefone' => '89898989'];
print_r($pessoa);

$carros = [
    "gol" => ['ano' => '2009', 'cor' => 'preto', 'motor' => '1.0'],
    "palio" => ['ano' => '2010', 'cor' => 'prata', 'motor' => '1.4'],
];

foreach($carros as $modelo => $info){
    echo $modelo . "\n";
    foreach($info as $attr => $valor){
        echo "$attr - $valor\n";
    }
}

array_push($cores, 'marron');
array_unshift($cores, 'ciano');
array_shift($cores);
array_pop($cores);

print_r($cores);
