<?php

namespace Stb;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Application as Console;

/**
 * Command base Class
 */
class Application extends Console
{
    private $reflector;
  /**
   *
   */
  function __construct( )
  {
    $this->reflector = new \ReflectionClass('Stb\Console');
  }

  public function addCommands()
  {
      $classes = $this->reflector->getName();

      var_dump($classes);
  }
}
