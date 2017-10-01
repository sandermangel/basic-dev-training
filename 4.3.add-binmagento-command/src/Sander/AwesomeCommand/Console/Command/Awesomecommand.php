<?php

namespace Sander\AwesomeCommand\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Awesomecommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function execute(
        InputInterface $input,
        OutputInterface $output
    ) {
        $output->writeln('Hello world');
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->setName('sander_awesomecommand:awesomecommand');
        $this->setDescription('Executes an awesome command');
        
        parent::configure();
    }
}
