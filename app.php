<?php

require 'vendor/autoload.php';
$commands = require_once __DIR__ . '/bootstrap/console.php';
$application = require_once __DIR__ . '/bootstrap/app.php';

//Add the commands to the application.
$application->addCommands($commands);
//Run it
$application->run();
