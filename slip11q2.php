<!-- Design a HTML form to accept a string. Write a PHP script for the following.
a) Write a function to count the total number of Vowels from the script.
b) Show the occurrences of each Vowel from the script -->
<!DOCTYPE html>
<html>
<head>
<title>Vowel Count</title>
</head>
<body>
<form action="vowel_count.php" method="POST">
<label for="stringInput">Enter a string:</label>
<input type="text" name="stringInput" id="stringInput" required>
<button type="submit">Count Vowels</button>
</form>
</body>
</html>
