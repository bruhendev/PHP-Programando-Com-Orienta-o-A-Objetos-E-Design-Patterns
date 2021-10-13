<?php
require_once 'CsvParser.php';

$csv = new CsvParser('clientes.csv', ';');
try {
    $csv->parse();
    echo "<pre>";
    while ($row = $csv->fetch()) {
        var_dump($row);
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
