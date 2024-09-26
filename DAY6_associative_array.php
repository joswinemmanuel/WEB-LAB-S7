<?php
$mon = array(
    "January" => "first",
    "February" => "second",
    "March" => "third",
    "April" => "fourth",
    "May" => "fifth",
    "June" => "sixth",
    "July" => "seventh",
    "August" => "eighth",
    "September" => "ninth",
    "October" => "tenth",
    "November" => "eleventh",
    "December" => "twelfth"
);

foreach ( $mon as $mon_name => $mon_value )
    echo "<p><b>$mon_name</b> is the <b>$mon_value</b> month of the year</p>";
?>
