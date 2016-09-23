<?php
// src/AppBundle/Command/DevCommand.php
namespace AppBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use AppBundle\Controller\ExtractorService;


class DevCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('app:dev')

            // the short description shown while running "php bin/console list"
            ->setDescription('\obeys.')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp("This command will obey...")

            //->addArgument('username', InputArgument::REQUIRED, 'The username of the user.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $extractor = new ExtractorService();
        //$extractor = $extractor->setContainer($this);
        //echo print_r($extractor, true);
        $extractor->createAction();

        $output->writeln([
            'Your wish is my command',
            '======================='
        ]);
        //$output->writeln([$input]);
    }
}
