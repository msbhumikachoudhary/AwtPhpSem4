<!-- Write a menu driven program to perform the following stack related operations.
c) Insert an element in stack.
d) Delete an element from stack.[Hint: array_push(), array_pop()]  -->
<?php
$stack = array();
while (true) {
    echo "\nSTACK OPERATIONS\n";
    echo "a) Display the stack\n";
    echo "b) Exit\n";
    echo "c) Insert an element in stack\n";
    echo "d) Delete an element from stack\n";
    $choice = readline("\nEnter your choice: ");
    switch ($choice) {
        case 'a':
            echo "\nCurrent Stack: ";
            print_r($stack);
            break;
        case 'b':
            exit();
        case 'c':
            $element = readline("Enter the element to insert: ");
            array_push($stack, $element);
            echo "Element '$element' has been inserted into the stack.";
            break;
        case 'd':
            if (empty($stack)) {
                echo "Stack is empty. Cannot delete an element.";
            } else {
                $deletedElement = array_pop($stack);
                echo "Element '$deletedElement' has been deleted from the stack.";
            }
            break;
        default:
            echo "Invalid choice. Please try again.";
            break;
    }
}
?>
