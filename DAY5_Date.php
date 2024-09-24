<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Today</title>
</head>
<body>
<p>
<?php
print "<b>Welcome to my home page <br /> <br />";
echo "Today is:</b> " . date("Y/m/d") . "<br>";
echo "<b>Current Date and Time:</b> " . date("Y-m-d H:i:s");
?>
</p>
</body>
</html>
