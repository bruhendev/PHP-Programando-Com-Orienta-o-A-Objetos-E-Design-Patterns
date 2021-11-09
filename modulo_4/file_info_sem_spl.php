<?php
class MeuArquivo
{
    private $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function getContents()
    {
        return file_get_contents($this->path);
    }

    public function getExtension()
    {
        return pathinfo($this->path, PATHINFO_EXTENSION);
    }

    public function getFileName()
    {
        return basename($this->path);
    }

    public function getSize()
    {
        return filesize($this->path);
    }
}

$file = new MeuArquivo('file_info_sem_spl.php');
echo "Nome: {$file->getFileName()} <br>";
echo "Conteúdo: {$file->getContents()} <br>";
echo "Extensão: {$file->getExtension()} <br>";
echo "Tamanho: {$file->getSize()} <br>";
