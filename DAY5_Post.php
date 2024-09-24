<!DOCTYPE html>
<?php
if(isset($_POST['submit'])) {
    $myText = $_POST['myName'];
    echo "<br>Hello ".$myText." Welcome to PHP World <br>";
} else {}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Enter your name in the form and hit submit button<br>
    <form action="hello.php" method="post">
        Enter Name : <input type="text" name="myName"> <br>
        <input type="submit" name="submit" value="Greet Me">
    </form>
</body>
</html>
