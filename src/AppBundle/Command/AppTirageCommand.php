<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class AppTirageCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this->setName('app:tirage')->setDescription('Recover the lottery draw data')->addOption('tirage', 't', InputOption::VALUE_OPTIONAL, 'Option to run import in loto or euromillions');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $tirage = $input->getOption('tirage');
        $this->getContainer()->get('app.tirage')->run($output);


        if ($tirage !== null) {
            // ...
        }

        $output->writeln('Command result.');
    }

}
