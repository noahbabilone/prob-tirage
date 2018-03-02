<?php

namespace AppBundle\Command;

use AppBundle\Entity\Game;
use AppBundle\Entity\Number;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class AppDataImportCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this->setName('app:data:import')->setDescription('...')//            ->addOption('all','a', InputArgument::OPTIONAL, 'all description')
        ->addOption('all', 'a', InputOption::VALUE_NONE, 'Option description');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $all = $input->getOption('all');
        $output->writeln("Command Init");
        ini_set('memory_limit', "-1");

        if ($all) {
            /** @var EntityManager $em */
            $em = $this->getContainer()->get('doctrine')->getManager();
            $output->writeln('Number');
            $number = $em->getRepository(Number::class)->find(1);
            if (!$number instanceof Number) {
                $output->writeln('Create Number');
                foreach (range(1, 100) as $range) {
                    $number = new Number();
                    $number->setValue($range)->setVisible(true);
                    $em->persist($number);
                    if ($range % 10 == 0) $em->flush();
                }
                $em->flush();
                $output->writeln('End of creating Number');
            } else {
                $output->writeln('No data import');
            }

            $game = $em->getRepository(Game::class)->findOneByName(Game::LOTO);
            if (!$game instanceof Game) {
                $output->writeln('Creating LOTTO');
                $em->persist((new Game())->setName(Game::LOTO)->setMin(1)->setMax(49)->setLength(5));
            } else
                $output->writeln('Loto: no data import');

            $game = $em->getRepository(Game::class)->findOneByName(Game::EUROMILLIONS);
            if (!$game instanceof Game) {
                $output->writeln('Creating EUROMILLIONS ');
                $em->persist((new Game())->setName(Game::EUROMILLIONS)->setMin(1)->setMax(50)->setLength(5));
            } else
                $output->writeln('EUROMILLIONS: no data import');
            $em->flush();
            unset($game, $em, $all);
        }
        $output->writeln('Command result.');
    }

}
