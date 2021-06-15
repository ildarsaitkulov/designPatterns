<?php

use Behavioral\Command\Invoker;
use Behavioral\Command\Receiver;
use Behavioral\Command\SimpleCommand;
use Behavioral\Command\ComplexCommand;

require_once  __DIR__. '/../../autoload.php';

/**
 * Клиентский код может параметризовать отправителя любыми командами.
 */
$invoker = new Invoker();
$invoker->setOnStart(new SimpleCommand("Say Hi!"));

$receiver = new Receiver();

$invoker->setOnFinish(new ComplexCommand($receiver, "Send email", "Save report"));

$invoker->doSomethingImportant();