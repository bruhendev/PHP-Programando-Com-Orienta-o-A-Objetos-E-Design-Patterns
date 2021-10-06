<?php

//Tipos de Variaveis


//String 
$nome = "Bruno";
$sobreNome = 'Henrique';

echo "meu nome é ". $nome . " " . $sobreNome . "\n";
echo "meu nome é {$nome} {$sobreNome} \n";

//numericos
$a = 5; $b = 9;

echo $a + $b . "\n";

//atribuição de variavel por referência 

$d = 5; $e = &$d;  $d = 10;

echo "$d e $e \n";

//booleanos

$peso = 30;

echo ($peso > 25); 
echo "\n";

//vetor

$nomes = ["bruno", "carla", "carlos"];

var_dump($nomes); echo "\n";

//Objetos

$pessoa = new stdClass;
$pessoa->nome = "Bruno";
$pessoa->sobreNome = "Henrique";

var_dump($pessoa); echo "\n";
