<?php
class CsvParser
{
    private $filename;
    private $separator;
    private $counter = 1;
    private $data;

    public function __construct($filename, $separator = ',')
    {
        $this->filename = $filename;
        $this->separator = $separator;
        $this->counter = 1;
    }

    public function parse()
    {
        $this->data = file($this->filename);
        $this->header = str_getcsv($this->data[0], $this->separator);
    }
}