<?php


abstract class Mobile
{
    /**
     * @var string
     */
    private $operator;

    /**
     * @var bool
     */
    private $canCall;

    /**
     * @var float
     */
    private $battery;

    /**
     * Mobile constructor.
     * @param string $operator
     * @param float $battery
     */
    protected function __construct(string $operator, float $battery)
    {
        $this->setOperator($operator);
        $this->setCanCall(true);
        $this->setBattery($battery);
    }

    /**
     * @return string
     */
    public function getOperator(): string
    {
        return $this->operator;
    }

    /**
     * @param string $operator
     */
    private function setOperator(string $operator): void
    {
        $this->operator = $operator;
    }

    /**
     * @return bool
     */
    public function canCall(): bool
    {
        return $this->canCall;
    }

    /**
     * @param bool $canCall
     */
    private function setCanCall(bool $canCall): void
    {
        $this->canCall = $canCall;
    }

    /**
     * @return float
     */
    public function getBattery(): float
    {
        return $this->battery;
    }

    /**
     * @param float $battery
     */
    private function setBattery(float $battery): void
    {
        $this->battery = $battery;
    }
}