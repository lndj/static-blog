<?php

namespace Stb\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * New a new Post.
 */
class NewCommand extends Command
{
  protected function configure()
  {
    $this
    ->setName('new')
    ->setDescription('New a new post which is markdown file in source folder.')
    ->addOption(
      'layout',
      'l',
      InputOption::VALUE_REQUIRED,
      'Choose a layout of post or page. '
    )
    ;
  }

  protected function execute(InputInterface $input, OutputInterface $output)
  {
      if ($layout = $input->getOption('layout')) {
          $output->writeln('The layout is ' . $layout);
          //TODO choose a layout
      }
      //TODO
  }
}
