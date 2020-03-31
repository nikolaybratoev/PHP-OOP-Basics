<?php
$person = new Person();

$person->setName('Nikolay');
$person->setAge(28);

printf("I am %s and I am %d years old.", $person->getName(),
                                                    $person->getAge());

class Person {
    private $name;
    private $age;

    /**
     * Person constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }
}