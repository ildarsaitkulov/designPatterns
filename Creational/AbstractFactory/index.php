<?php

use Creational\AbstractFactory\Application;
use Creational\AbstractFactory\MacFactory;
use Creational\AbstractFactory\WinFactory;

require_once  __DIR__. '/../../autoload.php';

$applicationWindows  = new Application(new WinFactory());
$applicationMacOs  = new Application(new MacFactory());