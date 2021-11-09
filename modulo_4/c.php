<?php
include_once 'a.php';
include_once 'b.php';

use \Application\Form;
use \Application\Fild;
use Componentes\Form as CForm;

var_dump(new Form); echo "<br>";
var_dump(new Fild); echo "<br>";
var_dump(new CForm); echo "<br>";