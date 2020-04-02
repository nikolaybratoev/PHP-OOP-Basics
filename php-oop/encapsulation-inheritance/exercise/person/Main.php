<?php
require_once "BasePerson.php";
require_once "Child.php";

$input = explode(" ", readline());

$name = strval($input[0]);
$age = intval($input[1]);

$child = null;
try {
    $child = new Child($name, $age);
    echo "Created class!";
} catch (Exception $e) {
    echo $e->getMessage();
}