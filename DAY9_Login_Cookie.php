<?php
if(isset($_POST["submit"])) {
    define("FIVE_DAYS", 60 * 60 * 24 * 5);
    setcookie("username", $_POST["username"], time() + FIVE_DAYS);
    setcookie("password", $_POST["password"], time() + FIVE_DAYS);
    $name = $_COOKIE["username"];
    $pass = $_COOKIE["password"];
    echo "Cookie set successfully with the following data";
    echo "<p>$name</p>";
    echo "<p>$pass</p>";
}
else {}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <br>
</body>
</html>


