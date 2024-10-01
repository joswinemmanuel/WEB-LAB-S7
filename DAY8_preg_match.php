<?php
$string = "redefine";
$pattern = "/def/";

if(preg_match($pattern, $string)) {
    echo "Pattern $pattern found in $string\n";
} else {
    echo "Pattern $pattern not found in $string\n";
}
?>
