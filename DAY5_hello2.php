<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Demo</title>
</head>
<body>
<?php
$txt = "PHP";
echo "Hello, World!"."<br>";
print("I love $txt"."<br>");
echo(floor(-5.1)."<br>");
echo(ceil(5.1)."<br>");
echo(round(0.51)."<br>");
echo phpversion();

echo("<br>"."<br>");
echo(rand(10, 100)."<br");
echo(rand(5, 10)."<br>");

define("MINSIZE", 50);
echo "<br>".MINSIZE . "<br>";
echo constant("MINSIZE");
?>
</body>
</html>
