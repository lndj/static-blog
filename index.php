<?php

require_once __DIR__.'/vendor/autoload.php';
require_once 'GreetCommand.php';

$silexApp = new Silex\Application();
$silexApp->register(new Gitory\PimpleCli\ServiceCommandServiceProvider());

// add your command as services ending in '.command' in your DI
$silexApp['user.new.command'] = function () {
    return new Acme\DemoBundle\Command\GreetCommand();
};

$consoleApp = new Symfony\Component\Console\Application($silexApp);
$consoleApp->addCommands($silexApp['command.resolver']->commands());
$consoleApp->run();