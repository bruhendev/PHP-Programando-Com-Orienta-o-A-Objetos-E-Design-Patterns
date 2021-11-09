<?php
$xml = simplexml_load_file('paises2.xml');

$xml->moeda = "Novo Real";
$xml->geografia->clima  = "Novo Real";

$xml->addChild('presidente', 'Chapolin Colorado');

echo $xml->asXML();

file_put_contents('paises2.xml', $xml->asXML());

