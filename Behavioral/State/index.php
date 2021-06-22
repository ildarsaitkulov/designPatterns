<?php

use Behavioral\State\Document;
use Behavioral\State\Draft;
use Behavioral\State\InModeration;

require_once  __DIR__. '/../../autoload.php';

$document = new Document(new Draft());
$document->render();

$document->changeState(new InModeration());
$document->render();