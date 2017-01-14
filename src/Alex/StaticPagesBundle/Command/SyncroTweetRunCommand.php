<?php

/**
 * Created by PhpStorm.
 * User: alexandreortigosa
 * Date: 19/12/2016
 * Time: 18:58
 */
namespace Alex\StaticPagesBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\StringInput;

class SyncroTweetRunCommand extends ContainerAwareCommand
{
    private $output;

    protected function configure()
    {
        $this
            ->setName('alex:participaciones:update')
            ->setDescription('Actualizando las participaciones según los tweets')
        ;
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('<comment>Running Syncro Tasks...</comment>');
        $this->output = $output;
        $userManager =
        $s = $this->getContainer()->get('app.syncrofunction');
        $s->execute();
        $output->writeln('<comment>Done!</comment>');
    }
}