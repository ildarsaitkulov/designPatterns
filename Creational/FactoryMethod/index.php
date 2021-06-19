<?php

use Creational\AbstractFactory\Application;
use Creational\AbstractFactory\MacFactory;
use Creational\AbstractFactory\WinFactory;
use Creational\FactoryMethod\AirTransportCompany;
use Creational\FactoryMethod\LandTransportCompany;
use Creational\FactoryMethod\WebDialog;
use Creational\FactoryMethod\WindowsDialog;

require_once  __DIR__. '/../../autoload.php';


$deliverBy = 'air';
//$deliverBy = 'land';

if ($deliverBy === 'air') {
    $transportCompany = new AirTransportCompany();
} else {
    $transportCompany = new LandTransportCompany();
}

$transportCompany->deliver();
