<?php
$n = intval(readline());
$people = [];
for ($i = 0; $i < $n; $i++) {
    $tokens = explode(" ", readline());
    $name = strval($tokens[0]);
    $age = intval($tokens[1]);
    $person = new Person5($name, $age);
    $people[$i] = $person;
}

sort($people);

foreach ($people as $person) {
    if ($person->getAge() > 30) {
        printf("%s - %d",
                $person->getName(),
                $person->getAge());
        echo PHP_EOL;
    }
}

class Person5
{
    private $name;
    private $age;

    /**
     * Person5 constructor.
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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    private function setName(string $name)
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
    private function setAge(int $age)
    {
        $this->age = $age;
    }


}