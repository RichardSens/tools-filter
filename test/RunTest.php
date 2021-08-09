<?php
error_reporting(E_ALL ^ E_DEPRECATED ^ E_NOTICE);
ini_set('display_errors', TRUE); 

require('../vendor/autoload.php');


use Tools\Filter\Filter\TrimFilter;
use Tools\Filter\Filter\StrToUpperFilter;
use Tools\Filter\Filter\StringFilterContainer;


$trimFilter = new TrimFilter();
$upFilter = new StrToUpperFilter();

$st = new StringFilterContainer();
$st->add($trimFilter);
$st->add($upFilter);

$nome = " richard t sens ";

$st->doFilter($nome);

echo "\n --- {" . $st->getSubject() . "} --> {" . $st->getFiltered() . "}\n";

