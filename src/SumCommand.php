<?php

namespace Kononov;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Outpup\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Yknnv\Sum;

class SumCommand extends Command
{
	public function configure()
	{
		$this->setName('sum')
			->setDescription("This console run command")
			->addArgument('a'.InputArgument::REQUIRED.'First number')
			->addArgument('b'.InputArgument::REQUIRED.'Second number');
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$output->writeln('Hello from there');
	}
}
