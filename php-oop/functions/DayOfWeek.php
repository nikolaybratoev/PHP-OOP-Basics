<?php
$input = readline();
$day = findDayName(intval($input));
echo $day . PHP_EOL;


/**
 * @param int $input
 * @return string
 */
function findDayName(int $input) :string {
    $days = ['', 'Monday', 'Tuesday', 'Wednesday',
        'Thursday', 'Friday', 'Saturday', 'Sunday', ''];
    return $days[$input];
}