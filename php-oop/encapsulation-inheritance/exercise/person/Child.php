<?php
require_once "BasePerson.php";

class Child extends BasePerson
{

    /**
     * Child constructor.
     * @param string $name
     * @param int $age
     * @throws Exception
     */
    public function __construct(string $name, int $age)
    {
        parent::__construct($name, $age);
    }
}

