<?php
foreach (new DirectoryIterator('C:\Users\Bruno\dev\PHP\PHP-Programando-Com-Orienta-o-A-Objetos-E-Design-Patterns\modulo_2') as $file) {
    echo (string) $file . "<br>";
    echo "Extensão:" . $file->getFileName() . "<br>";
    echo "Tamanho:" . $file->getSize() . "<br>";
    echo "<br><br>";    
}
