<?php
$dir = opendir('C:\Users\Bruno\dev\PHP\PHP-Programando-Com-Orienta-o-A-Objetos-E-Design-Patterns\modulo_2');

while ($arquivo = readdir($dir))
{
    echo $arquivo . "<br>";
}

closedir($dir);