<?php

use Doctrine\Migrations\Tools\Console\ConsoleRunner;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\CommandLoader\FactoryCommandLoader;
use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper;
use Symfony\Component\Console\Helper\HelperSet;
use Symfony\Component\Console\Helper\QuestionHelper;

if (php_sapi_name() != 'cli') die();

define('NO_KEEP_STATISTIC', true);
define('NOT_CHECK_PERMISSIONS', true);
define('BX_CRONTAB', true);
define('BX_WITH_ON_AFTER_EPILOG', true);
define('BX_NO_ACCELERATOR_RESET', true);
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'] = __DIR__.'/public';
require_once __DIR__.'/public/bitrix/modules/main/include/prolog_before.php';
@set_time_limit(0);
@ignore_user_abort(true);

$helpersSet = new HelperSet();
$helpersSet->set(new QuestionHelper(), 'question');
$helpersSet->set(new ConnectionHelper(DriverManager::getConnection([
    'dbname' => getenv('MYSQL_DATABASE'),
    'user' => getenv('MYSQL_USER'),
    'password' => getenv('MYSQL_PASSWORD'),
    'host' => getenv('DB_SERVER'),
    'driver' => 'mysqli',
])), 'db');
$cli = ConsoleRunner::createApplication($helpersSet);

$event = new Bitrix\Main\Event('', 'OnBuildCLICommandsList');
$event->send();
$commands = [];
foreach ($event->getResults() as $eventResult) {
    if ($eventResult->getParameters() instanceof Command) {
        $cli->add($eventResult->getParameters());
    } elseif (is_array($eventResult->getParameters())) {
        $command = $eventResult->getParameters();
        if ($command['command'] instanceof Command) {
            $cli->add($eventResult->getParameters());
        } elseif (trim($command['name']) && $command['command'] instanceof Closure) {
            $commands[$command['name']] = $command['command'];
        }
    }
}
if ($commands) $cli->setCommandLoader(new FactoryCommandLoader($commands));

$cli->run();
