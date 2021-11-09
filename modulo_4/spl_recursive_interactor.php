<?php
$path = 'C:\Users\Bruno\dev\PHP\PHP-Programando-Com-Orienta-o-A-Objetos-E-Design-Patterns';

foreach (
    new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($path, RecursiveDirectoryIterator::SKIP_DOTS)
    )
    as $item
)
{
    echo (string) $item . "<br>";
}