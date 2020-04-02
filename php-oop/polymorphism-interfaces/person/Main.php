<?php
require_once "Citizen.php";

$name = strval(readline());
$age = intval(readline());

$person = new Citizen($name, $age);

echo $person;