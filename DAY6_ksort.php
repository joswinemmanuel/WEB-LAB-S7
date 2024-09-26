<?php
$mon = array(
    "January" => 1,
    "February" => 2,
    "March" => 3,
    "April" => 4,
    "May" => 5,
    "June" => 6,
    "July" => 7,
    "August" => 8,
    "September" => 9,
    "October" => 10,
    "November" => 11,
    "December" => 12
);

echo "Before ksort<br>";
foreach ( $mon as $mon_name => $mon_value )
    echo "<p><b>$mon_name</b> is month number <b>$mon_value</b> of the year</p>";

ksort($mon);

echo "<br>After ksort<br>";
foreach ( $mon as $mon_name => $mon_value )
    echo "<p><b>$mon_name</b> is month number <b>$mon_value</b> of the year</p>";

?>
