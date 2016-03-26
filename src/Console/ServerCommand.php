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
    ->addOption(
        'port',
        'p',
        InputOption::VALUE_REQUIRED,
        'Designated port of local web server'
    )
    ;
  }

  protected function execute(InputInterface $iput, OutputInterface $output)
  {

      if ($port = $iput->getOption('port')) {
          $output->writeln('The port you set is ' . $port);
      }
    //TODO start the built-in web server.
  }
}
