<?php

use Structural\Adapter\SlackApi;
use Structural\Adapter\SlackNotification;
use Structural\Bridge\Circle;
use Structural\Bridge\GreenColor;
use Structural\Bridge\RedColor;
use Structural\Bridge\Square;

require_once  __DIR__. '/../../autoload.php';


$square = new Square(new RedColor());
$square->draw();

$circle = new Circle(new GreenColor());
$circle->draw();

