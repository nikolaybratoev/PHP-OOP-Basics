<?php
$speed = intval(readline());
$zone = readline();
$limit = getLimit(strval($zone));
if ($speed >= $limit) {
    $result = abs($limit - $speed);
    if ($result <= 20) {
        echo "speeding" . PHP_EOL;
    } elseif ($result <= 40) {
        echo "excessive speeding" . PHP_EOL;
    } else {
        echo "reckless driving" . PHP_EOL;
    }
}

/**
 * @param string $zone
 * @return int
 */
function getLimit(string $zone) :int {
    switch ($zone) {
        case 'motorway':
            $speedLimit = 130;
            break;
        case 'interstate':
            $speedLimit = 90;
            break;
        case 'city':
            $speedLimit = 50;
            break;
        case 'residential':
            $speedLimit = 20;
            break;
        default:
            $speedLimit = 1000;
    }
    return $speedLimit;
}
