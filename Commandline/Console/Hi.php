<?php

namespace I95dev\Commandline\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;

class Hi extends Command
{

	const NAME = 'name';

	protected function configure()
	{

		$options = [
			new InputOption(
				self::NAME,
				null,
				InputOption::VALUE_REQUIRED,
				'Name'
			)
		];

		$this->setName('example:hi')
			->setDescription('Demo command line')
			->setDefinition($options);

		parent::configure();
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		if ($name = $input->getOption(self::NAME)) {

			$output->writeln("Hello " . $name);


		} else {

			$output->writeln("Hello World");

		}

		return $this;

	}
}
