<?php
$file = new SplFileObject('arquivo.txt');

while(!$file->eof())
{
    echo "linha: {$file->fgets()} <br>";
}

foreach ($file as $linha => $conteudo)
{
    echo "{$linha}: {$conteudo} <br>";
}
