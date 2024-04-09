<!-- Write a menu driven program to perform the following operations on an associative array:
a) Display the elements of an array along with the keys.
b) Display the size of an array -->
<?php
$associativeArray = array(
    "key1" => "value1",
    "key2" => "value2",
    "key3" => "value3",
    "key4" => "value4",
);
function displayArrayElements($array) {
    echo "Elements of the array:\n";
    foreach ($array as $key => $value) {
        echo "Key: " . $key . ", Value: " . $value . "\n";
    }
    echo "\n";
}
function displayArraySize($array) {
    $size = count($array);
    echo "Size of the array: " . $size . "\n";
    echo "\n";
}
while (true) {
    echo "Menu:\n";
    echo "1. Display array elements\n";
    echo "2. Display array size\n";
    echo "3. Exit\n";
    echo "Enter your choice: ";

    $choice = readline();
    switch ($choice) {
        case 1:
            displayArrayElements($associativeArray);
            break;
        case 2:
            displayArraySize($associativeArray);
            break;
        case 3:
            exit();
        default:
            echo "Invalid choice. Please try again.\n";
            break;
    }
}
?>
