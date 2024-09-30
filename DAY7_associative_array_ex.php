<?php
$ages = array(
    "Harry" => 21,
    "Alice" => 20,
    "Megha" => 22,
    "Bob" => 19
);

$ages["Megha"] = 28;

asort($ages);
foreach ( $ages as $name => $age )
    echo "<p><b>$name</b> have roll no <b>$age</b></p>";

echo "<p>Entry with Alice : " . $ages["Alice"] . "</p>";
?>
