<?php
require_once "Computer.php";
require_once "Keyboard.php";
require_once "Mouse.php";

class DesktopComputer extends Computer implements Keyboard, Mouse
{
    /**
     * @var bool
     */
    private $keyboardConnected;

    /**
     * DesktopComputer constructor.
     * @param string $processor
     * @param string $ram
     */
    public function __construct(string $processor, string $ram)
    {
        parent::__construct($processor, $ram);
        $this->setKeyboardConnected(false);
    }

    /**
     * @return bool
     */
    public function isKeyboardConnected(): bool
    {
        return $this->keyboardConnected;
    }

    /**
     * @param bool $keyboardConnected
     */
    private function setKeyboardConnected(bool $keyboardConnected): void
    {
        $this->keyboardConnected = $keyboardConnected;
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
}