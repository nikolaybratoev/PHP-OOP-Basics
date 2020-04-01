<?php
require_once "Product.php";
require_once "Person.php";

$personsData = preg_split("/[=;]/", readline(), -1, PREG_SPLIT_NO_EMPTY);

$people = [];
for ($i = 0; $i < count($personsData) - 1; $i += 2) {
    $personName = $personsData[$i];
    $personMoney = $personsData[$i + 1];
    try {
        $people[] = new Person($personName, $personMoney);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

$productsData = preg_split("/[=;]/", readline(), -1, PREG_SPLIT_NO_EMPTY);

$products = [];
for ($i = 0; $i < count($productsData) - 1; $i += 2) {
    $productName = $productsData[$i];
    $productCost = $productsData[$i + 1];
    try {
        $products[] = new Product($productName, $productCost);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

$input = readline();
while ($input !== 'END') {
    $data = explode(" ", $input);

    $pName = $data[0];
    $prName = $data[1];

    if (key_exists($pName, $people) && array_key_exists($prName, $products)) {

        /**@var Person $person */
        $person = $people[$pName];
        try {
            $person->buyProduct($products[$prName]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    $input = readline();
}