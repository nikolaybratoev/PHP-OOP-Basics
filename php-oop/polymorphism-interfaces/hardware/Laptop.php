<?php
require_once "Computer.php";
require_once "Keyboard.php";
require_once "Mouse.php";
require_once "TouchScreen.php";

class Laptop extends Computer implements Keyboard, Mouse, TouchScreen
{
    /**
     * @var float
     */
    private $battery;

    /**
     * Laptop constructor.
     * @param string $processor
     * @param string $ram
     * @param float $battery
     */
    public function __construct(string $processor, string $ram, float $battery)
    {
        parent::__construct($processor, $ram);
        $this->setBattery($battery);
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

    public function pressKey(): void
    {
        // TODO: Implement pressKey() method.
    }

    public function changeStatus(): void
    {
        // TODO: Implement changeStatus() method.
    }

    public function click(): void
    {
        // TODO: Implement click() method.
    }

    public function move(): void
    {
        // TODO: Implement move() method.
    }

    public function moveFinger(): void
    {
        // TODO: Implement moveFinger() method.
    }

    public function clickFinger(): void
    {
        // TODO: Implement clickFinger() method.
    }

    public function writeText(): string
    {
        // TODO: Implement writeText() method.
        return null;
    }
}