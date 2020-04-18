<?php

require_once 'vendor/autoload.php';
use \Antonio\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAdressFromZipcode('59157206');

print_r($resultado);