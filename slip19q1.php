<!--  Write a PHP script to print following floyd’s triangle.
A
B C
D E F
G H I J -->
<?php
$char = 'A';
for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $char . " ";
        $char++;
    }
    echo "<br>";
}
?>
