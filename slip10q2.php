<!-- Write a menu driven program to perform the following queue related operations
a) Insert an element in queue
b) Delete an element from queue
c) Display the contents of queue -->
<?php
$queue = [];
function enqueue($queue, $element) {
    array_push($queue, $element);
    return $queue;
}
function dequeue($queue) {
    array_shift($queue);
    return $queue;
}
function displayQueue($queue) {
    if (empty($queue)) {
        echo "Queue is empty.\n";
    } else {
        echo "Queue: " . implode(", ", $queue) . "\n";
    }
}
while (true) {
    echo "----- Queue Operations -----\n";
    echo "1. Insert Element\n";
    echo "2. Delete Element\n";
    echo "3. Display Queue\n";
    echo "4. Exit\n";
    echo "Enter your choice: ";
    $choice = trim(fgets(STDIN));
    switch ($choice) {
        case 1:
            echo "Enter the element to insert: ";
            $element = trim(fgets(STDIN));
            $queue = enqueue($queue, $element);
            echo "Element inserted successfully.\n";
            break;
        case 2:
            if (empty($queue)) {
                echo "Queue is empty. Cannot delete element.\n";
            } else {
                $queue = dequeue($queue);
                echo "Element deleted successfully.\n";
            }
            break;
        case 3:
            displayQueue($queue);
            break;
        case 4:
            exit;
        default:
            echo "Invalid choice. Please try again.\n";
            break;
    }
    echo "\n";
}
?>
