<!-- Write a menu driven program to perform the following queue related operations
d) Insert an element in queue
e) Delete an element from queue
f) Display the contents of queue -->
<?php
$queue = array();
while (true) {
    echo "\nQUEUE OPERATIONS\n";
    echo "a) Display the contents of the queue\n";
    echo "b) Exit\n";
    echo "c) Insert an element in the queue\n";
    echo "d) Delete an element from the queue\n";
    $choice = readline("\nEnter your choice: ");
    switch ($choice) {
        case 'a':
            echo "\nCurrent Queue: ";
            print_r($queue);
            break;
        case 'b':
            exit();
        case 'c':
            $element = readline("Enter the element to insert: ");
            array_push($queue, $element);
            echo "Element '$element' has been inserted into the queue.";
            break;
        case 'd':
            if (empty($queue)) {
                echo "Queue is empty. Cannot delete an element.";
            } else {
                $deletedElement = array_shift($queue);
                echo "Element '$deletedElement' has been deleted from the queue.";
            }
            break;
        default:
            echo "Invalid choice. Please try again.";
            break;
    }
}
?>

