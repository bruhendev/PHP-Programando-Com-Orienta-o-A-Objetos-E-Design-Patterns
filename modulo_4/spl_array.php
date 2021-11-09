<?php
$dados = ['salmão', 'tilápia', 'sardinha', 'tucunaré'];

$objarray = new ArrayObject($dados);

$objarray->append('bacalhau');

echo $objarray->offsetGet(2) . "<br>";
$objarray->offsetSet(2, 'linguado');
echo $objarray->offsetGet(2) . "<br>";
$objarray->offsetUnset(2);

foreach ($objarray as $key => $value)
{
    echo "$key => $value <br>";
}
