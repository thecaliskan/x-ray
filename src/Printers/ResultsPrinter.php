<?php

namespace Permafrost\RayScan\Printers;

use Permafrost\RayScan\Configuration\Configuration;
use Symfony\Component\Console\Output\OutputInterface;

abstract class ResultsPrinter
{
    /** @var ResultPrinter|null */
    protected $printer = null;

    /** @var Configuration */
    protected $config;

    /** @var OutputInterface */
    protected $output;

    public function __construct(OutputInterface $output, Configuration $config)
    {
        $this->output = $output;
        $this->config = $config;
    }

    abstract public function print(array $results): void;

    abstract public function printSummary(array $results): void;

    abstract protected function printer(): ResultPrinter;
}