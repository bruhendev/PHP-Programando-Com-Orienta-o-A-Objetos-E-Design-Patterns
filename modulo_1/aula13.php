<?php 

$handler = fopen('C:\teste\arquivo.txt', 'r');

// print fgets($handler, 4096);

while (!feof($handler)){
    print fgets($handler, 4096);
    //print "\n";
}

fclose($handler);

$handler2 = fopen('C:\teste\arquivo2.txt', 'w');
fwrite( $handler2, 'Linha 4' . PHP_EOL);
fwrite( $handler2, 'Linha 5' . PHP_EOL);
fwrite( $handler2, 'Linha 6' . PHP_EOL);
fclose($handler2);

// print file_get_contents('C:\teste\arquivo2.txt');
// file_put_contents('C:\teste\arquivo3.txt', "a\nb\nc");

$arquivo = file('C:\teste\arquivo.txt');
print_r($arquivo);
foreach($arquivo as $linha){
    echo $linha;
}

// copy('C:\teste\arquivo.txt', 'C:\teste\novo.txt');
// rename('C:\teste\novo.txt', 'C:\teste\novo2.txt');
//unlink('C:\teste\novo2.txt');

//mkdir('C:\teste\novodir', 0777);
//rmdir('C:\teste\novodir');

$arquivos = scandir('C:\teste');

print_r($arquivos);