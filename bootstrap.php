<?php

use Psr\Log\AbstractLogger;
use Monolog\Handler\HandlerInterface;
use Pimple\Container;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

require_once __DIR__.'/vendor/autoload.php';
Dotenv\Dotenv::create(__DIR__)->load();
IQDEV\App::services(new Container([
    HandlerInterface::class => function (Container $c) {
        return new StreamHandler(__DIR__.'/logs/app/'.date('Y').'/'.date('m').'/'.date('d').'.log', Logger::WARNING);
    },
    AbstractLogger::class => function (Container $c) {
        return (new Logger('default'))->pushHandler($c[HandlerInterface::class]);
    },
]));
