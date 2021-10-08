<?php

require_once 'Preferencias.php';

$p1 = Preferencias::getInstance();
print "A linguagem é : " . $p1->getData('language') . "\n";
$p1->setData('language', 'pt');

$p2 = Preferencias::getInstance();
print "A linguagem é : " . $p2->getData('language') . "\n";

// var_dump($p1);
// var_dump($p2);