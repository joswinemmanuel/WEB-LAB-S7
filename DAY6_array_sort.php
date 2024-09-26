<?php
$fruits = array("Orange", "Apple", "Grapes", "Banana");

echo "Before sort : <br>";
foreach ($fruits as $fruit) {
    echo "<b>$fruit</b>" . "<br>";
}

sort($fruits);

echo "<br>After sort : <br>";
foreach ($fruits as $fruit) {
    echo "<b>$fruit</b>" . "<br>";
}
?>
