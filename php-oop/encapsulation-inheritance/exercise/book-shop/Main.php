<?php
require_once "Book.php";
require_once "GoldenEditionBook.php";

$author = strval(readline());
$title = strval(readline());
$price = floatval(readline());
$type = strtoupper(strval(readline()));

$book = null;
try {
    $book = new Book($title, $author, $price, $type);
    echo "OK" . PHP_EOL;
    echo floatval($book->getPrice());
} catch (Exception $e) {
    echo $e->getMessage();
}

$title = strval(readline());
$author = strval(readline());
$price = floatval(readline());
$type = strtoupper(strval(readline()));

$goldenBook = null;
try {
    $goldenBook = new GoldenEditionBook($title, $author, $price, $type);
    echo "OK" . PHP_EOL;
    echo $goldenBook->getPrice();
} catch (Exception $e) {
    echo $e->getMessage();
}