<!-- Write a PHP script to check number 153 is Armstrong or not -->
<?php
function isArmstrong($number) {
    $sum = 0;
    $temp = $number;
    while ($temp != 0) {
        $digit = $temp % 10;
        $sum += $digit ** 3;
        $temp = (int)($temp / 10);
    }
    if ($sum == $number) {
        return true;
    } else {
        return false;
    }
}
if (isArmstrong(153)) {
    echo "153 is an Armstrong number.";
} else {
    echo "153 is not an Armstrong number.";
}
?>
