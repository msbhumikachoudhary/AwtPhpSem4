<!-- Write a PHP script to script to display time table of your class( use HTML table tags in echo). -->
<?php
$timetable = array(
    array("Time", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday"),
    array("8:00 AM - 9:00 AM", "Math", "English", "Science", "Social Studies", "Gym"),
    array("9:00 AM - 10:00 AM", "Science", "Math", "English", "Math", "Art"),
    array("10:00 AM - 11:00 AM", "Social Studies", "Science", "Math", "English", "Science"),
    array("11:00 AM - 12:00 PM", "English", "Social Studies", "Gym", "Science", "Math"),
);
echo "<table border='1'>";
foreach ($timetable as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td>" . $cell . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
