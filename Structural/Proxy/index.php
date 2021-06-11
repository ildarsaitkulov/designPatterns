<?php

use Structural\Proxy\CachingDownloader;
use Structural\Proxy\SimpleDownloader;

require_once  __DIR__. '/../../autoload.php';


$realSubject = new CachingDownloader(new SimpleDownloader());
$realSubject->download('https://php.net');
$realSubject->download('https://php.net');