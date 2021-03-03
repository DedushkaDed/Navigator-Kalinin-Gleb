<?php

use Psr\Log\AbstractLogger;
use Monolog\Handler\HandlerInterface;
use Pimple\Container;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$autoloadPath = __DIR__.'/vendor/autoload.php';

if (!file_exists($autoloadPath)) {
    throw new Exception('Dependencies not installed: composer install');
}

require_once $autoloadPath;
Dotenv\Dotenv::create(__DIR__)->load();
IQDEV\App::services(new Container([
    HandlerInterface::class => function (Container $c) {
        return new StreamHandler(__DIR__.'/logs/app/'.date('Y').'/'.date('m').'/'.date('d').'.log', Logger::WARNING);
    },
    AbstractLogger::class => function (Container $c) {
        return (new Logger('default'))->pushHandler($c[HandlerInterface::class]);
    },
]));
