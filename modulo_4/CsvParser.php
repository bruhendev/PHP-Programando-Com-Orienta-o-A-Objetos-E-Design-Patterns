<?php
class CsvParser
{
    private $filename;
    private $separator;
    private $counter = 1;
    private $data;
    private $header;

    public function __construct($filename, $separator = ',')
    {
        $this->filename = $filename;
        $this->separator = $separator;
        $this->counter = 1;
    }

    public function parse()
    {
        if (!file_exists($this->filename)){
            throw new Exception("Erro ao encontrar o arquivo {$this->filename}");
        }

        if (!is_readable($this->filename)){
            throw new Exception("Sem permissão para abrir o arquvio {$this->filename}");
        }

        $this->data = file($this->filename);
        $this->header = str_getcsv($this->data[0], $this->separator);
        return TRUE;
    }

    public function fetch()
    {
        if (isset($this->data[$this->counter])){
            $row = str_getcsv($this->data[$this->counter ++], $this->separator);
            foreach ($row as $key => $value){
                $row[$this->header[$key]] = $value;
            }
            return $row;
        }
    }
}