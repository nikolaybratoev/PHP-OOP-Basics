<?php
$name = strval(readline());
$person = new Person4($name);
$person->sayHello();

class Person4
{
    private $name;

    /**
     * Person4 constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    function sayHello() {
        echo "$this->name says \"Hello\"!";
    }
}