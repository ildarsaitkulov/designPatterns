<?php

use Behavioral\Command\Bulb;
use Behavioral\Command\RemoteControl;
use Behavioral\Command\TurnOff;
use Behavioral\Command\TurnOn;

require_once  __DIR__. '/../../autoload.php';

$bulb = new Bulb();

$remoteControl = new RemoteControl();

$remoteControl->submit(new TurnOn($bulb));
$remoteControl->submit(new TurnOff($bulb));