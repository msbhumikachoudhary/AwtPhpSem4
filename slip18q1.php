<!-- Design a HTML form to accept a string. Write a PHP function that checks whether a
passed string is a palindrome or not? -->
<!DOCTYPE html>
<html>
<head>
<title>Palindrome Checker</title>
</head>
<body>
<h2>Palindrome Checker</h2>
<form method="post" action="check_palindrome.php">
<label for="inputString">Enter a string:</label>
<input type="text" name="inputString" id="inputString" required>
<br>
<input type="submit" value="Check">
</form>
</body>
</html>
