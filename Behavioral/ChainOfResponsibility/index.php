<?php

use Behavioral\ChainOfResponsibility\RoleCheckMiddleware;
use Behavioral\ChainOfResponsibility\Server;
use Behavioral\ChainOfResponsibility\ThrottlingMiddleware;
use Behavioral\ChainOfResponsibility\UserExistsMiddleware;

require_once  __DIR__. '/../../autoload.php';

/**
 * Клиентский код.
 */
$server = new Server();
$server->register("admin@example.com", "admin_pass");
$server->register("user@example.com", "user_pass");

// Все middleware соединены в цепочки. Клиент может построить различные
// конфигурации цепочек в зависимости от своих потребностей.
$middleware = new ThrottlingMiddleware(2);
$middleware->linkWith(new UserExistsMiddleware($server))->linkWith(new RoleCheckMiddleware());

// Сервер получает цепочку из клиентского кода.
$server->setMiddleware($middleware);

// ...

do {
    echo "\nEnter your email:\n";
    $email = readline();
    echo "Enter your password:\n";
    $password = readline();
    $success = $server->logIn($email, $password);
} while (!$success);