<?php
$xml = simplexml_load_file('paises.xml');

echo "Nome: {$xml->nome} <br>";
echo "Nome: {$xml->idioma} <br>";
echo "Nome: {$xml->capital} <br>";
echo "Nome: {$xml->moeda} <br>";
echo "Nome: {$xml->prefixo} <br>";