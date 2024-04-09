<!-- . Write a PHP script to display student information on web page.  -->
<!DOCTYPE html>
<html>
<head>
<title>Student Information</title>
</head>
<body>
<?php
    $studentName = "John Doe";
    $studentAge = 20;
    $studentGrade = "A";
    $studentSubjects = array("Math", "Science", "English");
    echo "<h1>Student Information</h1>";
    echo "<p><strong>Name:</strong> " . $studentName . "</p>";
    echo "<p><strong>Age:</strong> " . $studentAge . "</p>";
    echo "<p><strong>Grade:</strong> " . $studentGrade . "</p>";
    echo "<p><strong>Subjects:</strong></p>";
    echo "<ul>";
    foreach ($studentSubjects as $subject) {
        echo "<li>" . $subject . "</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
