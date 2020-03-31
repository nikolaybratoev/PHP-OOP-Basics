<?php
$input = readline();
$result = isPalindrome($input);
if ($result != 1) {
    echo "false" . PHP_EOL;
} else {
    echo "true" . PHP_EOL;
}

/**
 * @param $input
 * @return bool
 */
function isPalindrome($input) :bool {
    for ($i = 0; $i < strlen($input) / 2; $i++) {
        if ($input[$i] != $input[strlen($input) - $i - 1]) {
            return false;
        }
    }
    return true;
}