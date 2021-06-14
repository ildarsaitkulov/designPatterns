<?php

use Structural\Composite\CompoundGraphic;
use Structural\Composite\Dot;

require_once  __DIR__. '/../../autoload.php';


$dot1 = new Dot(1,2);
$dot2 = new Dot(4,5);

$compoundGraphic = new CompoundGraphic();
$compoundGraphic->add($dot1);
$compoundGraphic->add($dot2);

$compoundGraphic->draw();

$compoundGraphic->remove($dot2);

$compoundGraphic->draw();