<?php


abstract class Computer
{
    /**
     * @var string
     */
    private $processor;

    /**
     * @var string
     */
    private $ram;

    /**
     * Computer constructor.
     * @param string $processor
     * @param string $ram
     */
    protected function __construct(string $processor, string $ram)
    {
        $this->setProcessor($processor);
        $this->setRam($ram);
    }

    /**
     * @return string
     */
    public function getProcessor(): string
    {
        return $this->processor;
    }

    /**
     * @param string $processor
     */
    private function setProcessor(string $processor): void
    {
        $this->processor = $processor;
    }

    /**
     * @return string
     */
    public function getRam(): string
    {
        return $this->ram;
    }

    /**
     * @param string $ram
     */
    private function setRam(string $ram): void
    {
        $this->ram = $ram;
    }
}