<?php

function reverseNumber($num) {
    $rev = 0;
    while ($num != 0) {
        $digit = $num % 10;
        $rev = $rev * 10 + $digit;
        $num = (int)($num / 10);
    }
    return $rev;
}

$number = 12345;
$reversed = reverseNumber($number);

echo "Original Number: $number\n";
echo "Reversed Number: $reversed\n";
?>

