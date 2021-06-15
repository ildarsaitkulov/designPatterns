<?php

use Behavioral\Observer\ConcreteObserverA;
use Behavioral\Observer\ConcreteObserverB;
use Behavioral\Observer\Subject;

require_once  __DIR__. '/../../autoload.php';

/**
 * Клиентский код.
 */

$subject = new Subject();

$o1 = new ConcreteObserverA();
$subject->attach($o1);

$o2 = new ConcreteObserverB();
$subject->attach($o2);

$subject->someBusinessLogic();
$subject->someBusinessLogic();

$subject->detach($o2);

$subject->someBusinessLogic();