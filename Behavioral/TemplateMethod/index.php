<?php

use Behavioral\TemplateMethod\Facebook;
use Behavioral\TemplateMethod\Twitter;

require_once  __DIR__. '/../../autoload.php';

$username = readline('Username:');
$password = readline('Password:');
$message = readline('Message:');

echo "\nChoose the social network to post the message:\n" .
    "1 - Facebook\n" .
    "2 - Twitter\n";
$choice = readline();

// Теперь давайте создадим правильный объект социальной сети и отправим
// сообщение.
if ($choice == 1) {
    $network = new Facebook($username, $password);
} elseif ($choice == 2) {
    $network = new Twitter($username, $password);
} else {
    die("Sorry, I'm not sure what you mean by that.\n");
}
$network->post($message);