<!DOCTYPE html>
<html>
<head>
    <title>Odd or Even Checker</title>
</head>
<body>

<h2>Check if a Number is Odd or Even</h2>

<form method="get">
    Enter a number: <input type="number" name="number" required>
    <input type="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $num = $_GET["number"];

    if ($num % 2 == 0) {
        echo "<h3>$num is an Even number.</h3>";
    } else {
        echo "<h3>$num is an Odd number.</h3>";
    }
}
?>

</body>
</html>

