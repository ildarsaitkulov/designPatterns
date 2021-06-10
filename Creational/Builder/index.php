<?php

use Creational\Builder\CarBuilder;
use Creational\Builder\Director;

require_once  __DIR__. '/../../autoload.php';



$carBuilder = new CarBuilder();
$director = new Director();

$director->constructSportsCar($carBuilder);

var_dump($carBuilder->getResult());
