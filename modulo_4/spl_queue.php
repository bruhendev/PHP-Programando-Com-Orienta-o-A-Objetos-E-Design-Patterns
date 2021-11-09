<?php
$ingredientes = new SplQueue;

$ingredientes->enqueue('Peixe');
$ingredientes->enqueue('Sal');
$ingredientes->enqueue('Limão');

echo $ingredientes->count() . "<br>";
echo $ingredientes->dequeue(); echo '<br>';
echo $ingredientes->count() . "<br>";
echo $ingredientes->dequeue(); echo '<br>';
echo $ingredientes->count() . "<br>";
echo $ingredientes->dequeue(); echo '<br>';