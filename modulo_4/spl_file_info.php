<?php
$file = new SplFileInfo("spl_file_info.php");

echo "Nome: {$file->getFileName()} <br>";
echo "Extensão: {$file->getExtension()} <br>";
echo "Tamanho: {$file->getSize()} <br>";
echo "Tipo: {$file->getType()} <br>";
echo "Gravável: {$file->isWritable()} <br>";