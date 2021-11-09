<?php
$xml = simplexml_load_file('paises2.xml');

echo "Nome: {$xml->nome} <br>";
echo "Nome: {$xml->idioma} <br>";
echo "Informações Geográficas <br>";
echo "Clima: {$xml->geografia->clima} <br>";
echo "Costa: {$xml->geografia->clima} <br>";
echo "Pico: {$xml->geografia->pico} <br>";

