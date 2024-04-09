<!-- Write a PHP script for the following: Design a form to accept two strings. Compare the
two strings using both methods (= = operator & strcmp function). Append second string to
the first string. Accept the position from the user; from where the characters from the first
string are reversed. (Use radio buttons) -->
<!DOCTYPE html>
<html>
<head>
<title>String Operations</title>
</head>
<body>
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve the input strings
        $string1 = $_POST['string1'];
        $string2 = $_POST['string2'];
        if ($string1 == $string2) {
            echo "<p>Using == operator: The strings are equal.</p>";
        } else {
            echo "<p>Using == operator: The strings are not equal.</p>";
        }
        $comparison = strcmp($string1, $string2);
        if ($comparison == 0) {
            echo "<p>Using strcmp(): The strings are equal.</p>";
        } elseif ($comparison > 0) {
            echo "<p>Using strcmp(): The first string is greater than the second string.</p>";
        } else {
            echo "<p>Using strcmp(): The first string is less than the second string.</p>";
        }
        $appendedString = $string1 . $string2;
        echo "<p>Appended string: " . $appendedString . "</p>";
        $position = $_POST['position'];
        $reversedString = substr($string1, 0, $position - 1) . strrev(substr($string1, $position - 1));
        echo "<p>Reversed string: " . $reversedString . "</p>";
    }
    ?>
<h2>String Operations</h2>
<form method="post" action="">
<label for="string1">Enter the first string:</label><br>
<input type="text" id="string1" name="string1" required><br><br>
<label for="string2">Enter the second string:</label><br>
<input type="text" id="string2" name="string2" required><br><br>

<label>Choose the position to reverse characters:</label><br>
<input type="radio" id="position1" name="position" value="1" required>
<label for="position1">Position 1</label><br>
<input type="radio" id="position2" name="position" value="2">
<label for="position2">Position 2</label><br>
<input type="radio" id="position3" name="position" value="3">
<label for="position3">Position 3</label><br><br>
<input type="submit" value="Perform Operations">
</form>
</body>
</html>
