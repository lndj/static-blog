<?php

require 'vendor/autoload.php';
$commands = require_once __DIR__ . '/bootstrap/console.php';
$application = require_once __DIR__ . '/bootstrap/app.php';

// $application->addCommands($commands);
//
// $application->run();

use Stb\Application;

$a = new Application();

$a->addCommands();
