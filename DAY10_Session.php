<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <?php
    $_SESSION["uname"] = "admin";
    $_SESSION["pwd"] = "admin123";
    echo "<h1>Session variables are set.</h1>";

    echo "<h3>User name is : " . $_SESSION["uname"] . "</h3>";
    echo "<h3>Password is : " . $_SESSION["pwd"] . "</h3>";
    ?>
</body>
</html>
