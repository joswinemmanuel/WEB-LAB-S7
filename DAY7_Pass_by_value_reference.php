<?php
function max_abs($first, $second) : int {
    return max(abs($first), abs($second));
}

echo "Max of 100 and 90 is : " . max_abs(100, 90) . "<br>";

function add_five(&$value) {
    $value += 5;
}

$num = 2;
add_five($num);
echo "Num = $num";
?>
