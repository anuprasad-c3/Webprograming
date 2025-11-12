<!DOCTYPE html>
<html>
<head>
    <title>Invalid Login</title>
</head>
<body>
    <h2>
        <?php
        if (isset($_GET['error'])) {
            if ($_GET['error'] == 'user') {
                echo "❌ Invalid username!";
            } elseif ($_GET['error'] == 'pass') {
                echo "❌ Invalid password!";
            }
        }
        ?>
    </h2>
    <a href="login.php">Try Again</a>
</body>
</html>

