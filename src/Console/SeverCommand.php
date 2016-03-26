<?php

namespace Stb\Console;

use Symfony\Component\Console\InputInterface;
use Symfony\Component\Console\OutputInterface;
use Symfony\Component\Console\InputArgument;
use Symfony\Component\Console\InputOption;
use Symfony\Component\Console\Command\Command;

/**
 * Start the local Server
 */
class ServerCommand extends Command
{

  protected function configure()
  {
    $this
    ->setName('server')
    ->setDescription('Start the local server.')
    ;
  }

  protected function execute()
  {
    //TODO start the built-in web server.
  }
}
