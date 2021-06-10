<?php

use Creational\AbstractFactory\Application;
use Creational\AbstractFactory\MacFactory;
use Creational\AbstractFactory\WinFactory;
use Creational\FactoryMethod\WebDialog;
use Creational\FactoryMethod\WindowsDialog;

require_once  __DIR__. '/../../autoload.php';


$os = 'windows';
//$os = 'web';

if ($os === 'windows') {
    $dialog  = new WindowsDialog();
} else {
    $dialog  = new WebDialog();
}


$dialog->render();

