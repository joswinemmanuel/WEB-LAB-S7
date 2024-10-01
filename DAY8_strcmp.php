<?php
$string1 = "apple";
$string2 = "banana";
$result = strcmp($string1, $string2);

if($result < 0) {
    echo "$string1 precedes $string2 alphabetically";
} elseif($result == 0) {
    echo "$string1 and $string2 are equal";
} else {
    echo "$string1 follows $string2 alphabetically";
}
?>
