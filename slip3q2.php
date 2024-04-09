<!-- Write a PHP script for the following: Design a form to accept the details of 5 different
items, such as item code, item name, units sold, rate. Display the bill in the tabular format.
Use only 4 text boxes. (Hint : Use of explode function.) -->
<!DOCTYPE html>
<html>
<head>
<title>Bill Details</title>
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
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve the form data
        $data = $_POST['bill_data'];
        $items = explode(';', $data);
        echo '<table>';
        echo '<tr>
<th>Item Code</th>
<th>Item Name</th>
<th>Units Sold</th>
<th>Rate</th>
</tr>';
        foreach ($items as $item) {
            $itemDetails = explode(',', $item);
            $itemCode = $itemDetails[0];
            $itemName = $itemDetails[1];
            $unitsSold = $itemDetails[2];
            $rate = $itemDetails[3];
            echo '<tr>
<td>' . $itemCode . '</td>
<td>' . $itemName . '</td>
<td>' . $unitsSold . '</td>
<td>' . $rate . '</td>
</tr>';
        }
        echo '</table>';
    }
    ?>
<h2>Enter Bill Details</h2>
<form method="post" action="">
<label for="bill_data">Enter bill data:</label><br>
<textarea id="bill_data" name="bill_data" rows="5" cols="50" required></textarea><br><br>
<input type="submit" value="Generate Bill">
</form>
</body>
</html>
