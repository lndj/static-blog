<?php

namespace Stb\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Init the application
 */
class InitCommand extends Command
{
  protected function configure()
  {
    $this
    ->setName('init')
    ->setDescription('Init the Static Blog application.')
    ->addArgument(
      'folder',
      InputArgument::OPTIONAL,
      'Specify a folder which will place application in it.If not given,
      the default is the current folder.'
    );
  }

  protected function execute(InputInterface $input, OutputInterface $output)
  {
    $folder = $input->getArgument('folder');

    if ($folder) {
      //TODO
    }

    $output->writeln('<comment>Your Blog is init success!</comment>');
  }
}
