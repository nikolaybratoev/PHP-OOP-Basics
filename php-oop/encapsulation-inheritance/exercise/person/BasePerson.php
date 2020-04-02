<?php


abstract class BasePerson
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
     * BasePerson constructor.
     * @param string $name
     * @param int $age
     * @throws Exception
     */
    protected function __construct(string $name, int $age)
    {
        $this->setName($name);
        $this->setAge($age);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @throws Exception
     */
    private function setName(string $name): void
    {
        if (strlen($name) <= 3) {
            throw new Exception("Name’s length should not be less than 3 symbols!");
        }
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     * @throws Exception
     */
    private function setAge(int $age): void
    {
        if ($age < 1) {
            throw new Exception("Age must be positive!");
        }

        if ($age > 15) {
            throw new Exception("Child’s age must be less than 16!");
        }
        $this->age = $age;
    }
}