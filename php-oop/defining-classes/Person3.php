<?php
$input = readline();
while ($input != 'END') {
    $tokens = explode(" ", $input);
    $name = strval($tokens[0]);
    $age = intval($tokens[1]);
    $occupation = strval($tokens[2]);
    $person = new Person3($name, $age, $occupation);
    printf("%s - age: %d, occupation: %s\n",
                $person->getName(),
                $person->getAge(),
                $person->getOccupation());
    $input = readline();
}

class Person3
{
    private $name;
    private $age;
    private $occupation;

    /**
     * Person3 constructor.
     * @param string $name
     * @param int $age
     * @param string $occupation
     */
    public function __construct(string $name, int $age, string $occupation)
    {
        $this->name = $name;
        $this->age = $age;
        $this->occupation = $occupation;
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
     */
    public function setName(string $name)
    {
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
     */
    public function setAge(int $age)
    {
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getOccupation(): string
    {
        return $this->occupation;
    }

    /**
     * @param string $occupation
     */
    public function setOccupation(string $occupation)
    {
        $this->occupation = $occupation;
    }


}