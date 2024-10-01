<?php
$string = "redefine define";
$pattern = "/def/";

if(preg_match_all($pattern, $string, $matches)) {
    echo "Pattern $pattern found in $string <br>";
    echo "Count : " . count($matches[0]);
} else {
    echo "Pattern $pattern not found in $string\n";
}
?>
