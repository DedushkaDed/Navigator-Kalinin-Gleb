<?php
error_reporting(0);

$cmd = $argv[1];
if (!$cmd) {
    die();
}

try {
    require 'bootstrap.php';
    $containerName = $_ENV['PROJECT_NAME'] . '-php';
    if (!$containerName) {
        throw new Exception('Name not defined ENV');
    }
    execCommand($containerName, $cmd);
} catch (Exception $e) {
    $containerName = parsePsDockerCompose();
    if (!$containerName) {
        die();
    }
    execCommand($containerName, $cmd);
}


function execCommand($containerName, $cmd)
{
    $cmd = "docker exec -it {$containerName} {$cmd}";
    system($cmd);
    die();
}

function parsePsDockerCompose()
{
    $root = __DIR__;
    $r = '/^.*-php/m';
    $psResult = shell_exec("cd {$root} && docker-compose ps");
    $matches = [];
    preg_match($r, $psResult, $matches);
    return current($matches);
}
