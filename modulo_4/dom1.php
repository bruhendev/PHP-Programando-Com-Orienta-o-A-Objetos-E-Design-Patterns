<?php
$doc = new DOMDocument();
$doc->load('bases.xml');

$bases = $doc->getElementsByTagName('base');

foreach ($bases as $base)
{
    echo "ID: {$base->getAttribute('id')} <br>";

    $names = $base->getElementsByTagName('name');
    $hosts = $base->getElementsByTagName('host');
    $types = $base->getElementsByTagName('type');
    $users = $base->getElementsByTagName('user');

    echo "Name: {$names->item(0)->nodeValue} <br>";
    echo "Host: {$hosts->item(0)->nodeValue} <br>";
    echo "Type: {$types->item(0)->nodeValue} <br>";
    echo "User: {$users->item(0)->nodeValue} <br>";

}