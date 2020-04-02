<?php
require_once "Human.php";
require_once "Student.php";
require_once "MyWorker.php";

try {
    $student = new Student('Ivan', 'Ivanov', 1590123);
        $worker = new MyWorker('Stefan', 'Kiov', 1590, 8);
    echo $student . PHP_EOL;
    echo PHP_EOL;
    echo $worker;
} catch (Exception $e) {
    echo $e->getMessage();
}