<!DOCTYPE html>
<html>
<head>
    <title>Factorial Calculator</title>
</head>
<body>

<h2>Find the Factorial of a Number</h2>

<form method="post">
    Enter a number: <input type="number" name="number" required>
    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["number"];
    $factorial = 1;

    // Calculate factorial using for loop
    for ($i = 1; $i <= $num; $i++) {
        $factorial *= $i;
    }

    echo "<h3>Factorial of $num is: $factorial</h3>";
}
?>

</body>
</html>

