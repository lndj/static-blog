<?php

namespace Stb\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Deploy public application
 */
class DeployCommand extends Command
{

    protected function configure()
    {
        $this
        ->setName('deploy')
        ->setDescription('Deploy public application')
        ->addOption(
            'way',
            'w',
            InputOption::VALUE_REQUIRED,
            'Designated the way of remote web server,if not,choose the default way in config.yaml'
        )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        if ($way = $input->getOption('way')) {
            //TODO
            $output->writeln('The way is ' . $way);
        }
    }
}
