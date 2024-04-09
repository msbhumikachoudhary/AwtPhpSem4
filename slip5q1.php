<!-- Write a PHP script to check number 153 is Armstrong or not. -->
<?php
function isArmstrongNumber($number) {
    $sum = 0;
    $temp = $number;
    $digits = strlen($number);
    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $digits);
        $temp = intval($temp / 10);
    }
    if ($sum === $number) {
        return true;
    } else {
        return false;
    }
}
$number = 153;
if (isArmstrongNumber($number)) {
    echo $number . " is an Armstrong number.";
} else {
    echo $number . " is not an Armstrong number.";
}
?>
