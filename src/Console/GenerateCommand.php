<?php

namespace Stb\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Generate the the static html file.
 */
class GenerateCommand extends Command
{
    protected function configure()
    {
        $this
        ->setName('generate')
        ->setDescription('Generate the static file.')
        ->addOption(
            'deploy',
            'd',
            InputOption::VALUE_NONE,
            'Deploy when the static file is generated.'
        )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        //TODO generate the static file.

        if ($deploy = $input->getOption('deploy')) {
             $output->writeln('Deploy when the static file is generated.');
             //TODO
        }
    }
}
