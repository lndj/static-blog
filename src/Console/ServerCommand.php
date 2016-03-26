<?php

namespace Stb\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

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

  protected function execute(InputInterface $iput, OutputInterface $output)
  {
    //TODO start the built-in web server.
  }
}
