<!-- Declare a Multidimensional Array. Display specific element from a Multidimensional
array. Also delete given element from the Multidimensional array.(After each operation
display array content.) -->
<?php
$multiArray = array(
    array("John", "Doe", 25),
    array("Jane", "Smith", 30),
    array("Bob", "Johnson", 35)
);
echo "Specific element: " . $multiArray[1][2] . "\n";
unset($multiArray[0][1]);
echo "Array after deletion:\n";
foreach ($multiArray as $innerArray) {
    foreach ($innerArray as $element) {
        echo $element . " ";
    }
    echo "\n";
}
?>
