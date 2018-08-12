<?php

namespace Kononov\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Yknnv\Sum;

class SumCommand extends Command
{
	protected function configure()
	{
		$this->setName('sum')
			->setDescription("This console run command")
			->addArgument('a', InputArgument::REQUIRED, 'First number')
			->addArgument('b', InputArgument::REQUIRED, 'Second number');
	}

	public function execute(InputInterface $input, OutputInterface $output)
	{
		$a = $input->getArgument('a');
		$b = $input->getArgument('b');
		$sum = new Sum();
		$res = $sum->sum($a, $b);
		$this->setStyle($output);
		$output->writeln("<style>".$res."</style>");
	}
	
	protected function setStyle(&$output){
		$style = new OutputFormatterStyle('black', 'white', array('bold', 'blink'));
		$output->getFormatter()->setStyle('style', $style);
	}
}
