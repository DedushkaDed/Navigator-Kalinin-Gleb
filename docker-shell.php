<?php
/**
 * 
 */

require 'bootstrap.php';

$containerName = $_ENV['PROJECT_NAME'] . '-php';

$cmd = $argv[1];
if (!$cmd) {
    die();
}
$cmd = "docker exec -it {$containerName} {$cmd}";
echo shell_exec($cmd);
