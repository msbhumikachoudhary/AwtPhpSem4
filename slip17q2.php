<!-- Declare array. Reverse the order of elements, making the first element last and last
element first and similarly rearranging other array elements.[Hint : array_reverse()] -->
<?php
// Declare the array
$myArray = array(1, 2, 3, 4, 5);

$reversedArray = array_reverse($myArray);
echo "Original Array: ";
print_r($myArray);

echo "Reversed Array: ";
print_r($reversedArray);
?>
