<?php

namespace Convertor;

use Convertor\Exception\InvalidFilterException;
use Convertor\Exception\OutputFilterException;
use Convertor\Filter\Apostrophe;
use Convertor\Filter\Dash;
use Convertor\Filter\Dots;
use Convertor\Filter\FilterInterface;
use Convertor\Filter\Quotes;
use Convertor\Input\InputInterface;
use Convertor\Input;
use Convertor\Output\OutputInterface;
use Convertor\Output;

class Converter
{
    /**
     * @var InputInterface
     */
    protected $input;

    /**
     * @var OutputInterface
     */
    protected $output;

    /**
     * @var array
     */
    protected $filters;

    /**
     * Converter constructor.
     */
    public function __construct()
    {
        $this->setDefaultFilters();
    }

    /**
     * Convert text
     * @param $text
     * @return string
     */
    public function convert($text)
    {
        $response = $this->getInput()->write($text);
        foreach ($this->getFilters() as $filter) {
            $response = $filter->filter($response);
            if (strlen($text) > 0 && !$response) {
                throw new OutputFilterException('Filter\'s result is empty! Filter:' . get_class($filter));
            }
        }
        return $this->getOutput()->read($response);
    }

    /**
     * @return InputInterface
     */
    protected function getInput(): InputInterface
    {
        if (!$this->input) {
            $this->setInput(new Input\Text());
        }

        return $this->input;
    }

    /**
     * @param InputInterface $input
     * @return Converter
     */
    public function setInput(InputInterface $input): self
    {
        $this->input = $input;
        return $this;
    }

    /**
     * @return OutputInterface
     */
    protected function getOutput(): OutputInterface
    {
        if (!$this->output) {
            $this->setOutput(new Output\Text());
        }
        return $this->output;
    }

    /**
     * @param OutputInterface $output
     * @return Converter
     */
    public function setOutput(OutputInterface $output): self
    {
        $this->output = $output;
        return $this;
    }

    /**
     * @param array $filters
     * @return Converter
     */
    public function setFilters(array $filters): self
    {
        foreach ($filters as &$filter) {
            if (!$filter instanceof FilterInterface) {
                throw new InvalidFilterException('Invalid filter:'.get_class($filter));
            }
        }
        $this->filters = $filters;
        return $this;
    }

    protected function setDefaultFilters()
    {
        $filters = [
            new Dash(),
            new Apostrophe(),
            new Quotes(),
            new Dots(),
        ];
        $this->setFilters($filters);
    }

    /**
     * @return FilterInterface[]
     */
    protected function getFilters(): array
    {
        return $this->filters;
    }
}
