<?php

namespace Stb\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Clean the cache file cache.json and generated html file.
 */
class CleanCommand extends Command
{

    protected function configure()
    {
        $this
        ->setName('clean')
        ->setDescription('Clean the cache file cache.json and generated html file')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        //TODO Clean the cache file cache.json and generated html file.
    }
}
