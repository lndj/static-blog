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

while ($process->isRunning()) {
    // waiting for process to finish
    echo "string";
}

echo $process->getOutput();
