<?php
session_start();
if(isset($_POST['submit'])) {
    if(($_POST['myUname'] != "") || ($_POST['myPass'] != "")) {
        $inputUname = $_POST['myUname'];
        $inputPass = $_POST['myPass'];
        if($inputUname == "admin" && $inputPass == "admin123") {
            $_SESSION["uname"] = $inputUname;
            header("Location: welcome.php");
            exit();
        } else {
            $errorMessage = "Incorrect username or password";
        }
    } else {
        $errorMessage = "Enter username and password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
    if (isset($errorMessage)) {
        echo "<p sytle='color:red;'>$errorMessage</p>";
    }

    ?>

    Enter you username and password in the form and hit login
    <form action="" method="post">
        UserName : <input name="myUname" type="text"> <br>
        Password : <input name="myPass" type="password"> <br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>
