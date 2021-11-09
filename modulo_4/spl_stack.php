<?php
$ingredientes = new SplStack;

$ingredientes->push('Peixe');
$ingredientes->push('Sal');
$ingredientes->push('Limão');

echo $ingredientes->count();
echo "<br>";
echo $ingredientes->pop();