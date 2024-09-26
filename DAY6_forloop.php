<?php
$cars = array("BMW", "Porche", "Bugatti", "Benz");
echo "<b>Cars using foreach : </b>" . "<br>";
foreach ($cars as $car) {
    echo $car . "<br>";
}

echo "<br><b>Cars using for in : </b>" . "<br>";
for ($i = 0; $i < count($cars); $i++) {
    echo $cars[$i] . "<br>";
}
?>
