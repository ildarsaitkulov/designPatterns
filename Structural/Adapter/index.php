<?php

use Structural\Adapter\SlackApi;
use Structural\Adapter\SlackNotification;

require_once  __DIR__. '/../../autoload.php';


$slackNotification = new SlackNotification(new SlackApi(), '123');
$slackNotification->send('Slack title', 'slack message');
