<!-- Write a PHP script for the following: Design a form to accept the details of 5 different
items, such as item code, item name, units sold, rate. Display the bill in the tabular format.
Use only 4 text boxes. (Hint : Use of explode function.)  -->
<!DOCTYPE html>
<html>
<head>
<title>Item Details and Bill</title>
</head>
<body>
<h1>Item Details and Bill</h1>
<form method="post" action="">
<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $itemDetails = $_POST['item_details'];
            $items = explode("\n", $itemDetails);
            echo "<table border='1'>";
            echo "<tr><th>Item Code</th><th>Item Name</th><th>Units Sold</th><th>Rate</th></tr>";
            foreach ($items as $item) {
                $itemData = explode(",", $item);
                $itemCode = isset($itemData[0]) ? $itemData[0] : "";
                $itemName = isset($itemData[1]) ? $itemData[1] : "";
                $unitsSold = isset($itemData[2]) ? $itemData[2] : "";
                $rate = isset($itemData[3]) ? $itemData[3] : "";
                echo "<tr>";
                echo "<td>" . $itemCode . "</td>";
                echo "<td>" . $itemName . "</td>";
                echo "<td>" . $unitsSold . "</td>";
                echo "<td>" . $rate . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
        ?>

<p>Enter item details (item code, item name, units sold, rate) separated by new lines:</p>
<textarea name="item_details" rows="5" cols="30"></textarea><br><br>
<input type="submit" value="Generate Bill">
</form>
</body>
</html>
