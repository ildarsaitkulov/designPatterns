<?php

use Behavioral\Strategy\Navigator;
use Behavioral\Strategy\PublicTransport;
use Behavioral\Strategy\Walking;

require_once  __DIR__. '/../../autoload.php';

$navigator = new Navigator(new PublicTransport());
$navigator->buildRoute(1,2);

$navigator = new Navigator(new Walking());
$navigator->buildRoute(1,2);