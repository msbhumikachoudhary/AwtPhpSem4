<!-- Declare array. Reverse the order of elements, making the first element last and last
element first and similarly rearranging other array elements.[Hint : array_reverse()] -->
<?php
$array = array(1, 2, 3, 4, 5);\
$reversedArray = array_reverse($array);
echo "Original Array: " . implode(", ", $array) . "\n";
echo "Reversed Array: " . implode(", ", $reversedArray);
?>
