<?php
$xml = simplexml_load_file('paises3.xml');

echo "Nome: {$xml->nome} <br>";
echo "Nome: {$xml->idioma} <br>";

// print $xml->estados->nome[0];

foreach($xml->estados->nome as $estado)
{
    echo "Estado: $estado <br>";
}



