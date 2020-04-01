<?php
require_once "Box.php";

$length = floatval(readline());
$width = floatval(readline());
$height = floatval(readline());

$box = null;
try {
    $box = new Box($length, $width, $height);
} catch (Exception $e) {
    echo $e->getMessage();
}
echo $box;