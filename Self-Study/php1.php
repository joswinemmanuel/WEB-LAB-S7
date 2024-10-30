<?php
if(isset($_POST['submit'])) {
    echo "<h1>Hello " . $_POST['name'] . " to PHP</h1>";
    echo '<p><a href="index.php">Go back</a></p>';
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello user</title>
</head>
<body>
    <h1>Hey Who are you?</h1>
    <form action="" method="POST">
        <p><label for="name">Enter your name : </label>
        <input type="text" name="name"></p>
        <input type="submit" name="submit" value="Share name">
    </form>
</body>
</html>
<?php
}
?>
