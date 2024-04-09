<!-- Write a PHP script to script to display time table of your class( use HTML table tags in echo). -->
<!DOCTYPE html>
<html>
<head>
<title>Class Time Table</title>
<style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
</style>
</head>
<body>
<?php
    $timeTable = [
        ['Time Slot', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
        ['8:00 AM - 9:00 AM', 'Math', 'Science', 'English', 'History', 'Geography'],
        ['9:00 AM - 10:00 AM', 'Science', 'Math', 'Geography', 'English', 'History'],
        ['10:00 AM - 11:00 AM', 'English', 'History', 'Math', 'Science', 'Geography'],
        ['11:00 AM - 12:00 PM', 'Geography', 'English', 'Science', 'Math', 'History']
    ];
    echo '<table>';
    foreach ($timeTable as $row) {
        echo '<tr>';
        foreach ($row as $data) {
            echo '<td>' . $data . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
    ?>
</body>
</html>
