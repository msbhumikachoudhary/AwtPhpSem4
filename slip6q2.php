<!-- Write a menu driven program the following operation on an associative array
a) Reverse the order of each element’s key-value pair. [Hint: array_flip()]
b) Traverse the element in an array in random order. [Hint: shuffle()] -->
<?php
$associativeArray = array(
    "key1" => "value1",
    "key2" => "value2",
    "key3" => "value3",
    "key4" => "value4",
);
function reverseKeyValuePairs($array) {
    $reversedArray = array_flip($array);
    return $reversedArray;
}
function traverseRandomly($array) {
    $keys = array_keys($array);
    shuffle($keys);
    foreach ($keys as $key) {
        echo "Key: " . $key . ", Value: " . $array[$key] . "\n";
    }
    echo "\n";
}
while (true) {
    echo "Menu:\n";
    echo "1. Reverse the order of key-value pairs\n";
    echo "2. Traverse the elements in random order\n";
    echo "3. Exit\n";
    echo "Enter your choice: ";
    $choice = readline();
    switch ($choice) {
        case 1:
            $reversedArray = reverseKeyValuePairs($associativeArray);
            echo "Reversed Array:\n";
            foreach ($reversedArray as $key => $value) {
                echo "Key: " . $key . ", Value: " . $value . "\n";
            }
            echo "\n";
            break;
        case 2:
            echo "Elements in random order:\n";
            traverseRandomly($associativeArray);
            break;
        case 3:
            exit();
        default:
            echo "Invalid choice. Please try again.\n";
            break;
    }
}
?>
