<?php

require 'vendor/autoload.php';
// $commands = require_once __DIR__ . '/bootstrap/console.php';
// $application = require_once __DIR__ . '/bootstrap/app.php';
//
// //Add the commands to the application.
// $application->addCommands($commands);
// //Run it
// $application->run();

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

$process = new Process('php test.php');

$process->start();

$p = new Process('php test.php');
$p->start();

echo 'qqqq';
sleep(1);

$process->wait(function ($type, $buffer) {
    if (Process::ERR === $type) {
        echo 'ERR > '.$buffer;
    } else {
        echo 'OUT > '.$buffer;
    }
});

$p->wait(function ($type, $buffer) {
    if (Process::ERR === $type) {
        echo 'ERR > '.$buffer;
    } else {
        echo 'OUT > '.$buffer;
    }
});
