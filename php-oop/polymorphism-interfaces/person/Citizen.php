<?php
require_once "Person.php";

class Citizen implements Person
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $age;

    /**
     * Citizen constructor.
     * @param string $name
     * @param int $age
     */
    public function __construct(string $name, int $age)
    {
        $this->setName($name);
        $this->setAge($age);
    }

    /**
     * @return string
     */
    private function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    private function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param string $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @param $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return "{$this->getName()} - {$this->getAge()}";
    }
}