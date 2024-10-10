<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "test"

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn) {
    echo "Connected to " . $dbname . " established successfully";
} else {
    die("Connecty failed : " . mysqli_connect_error());
}
?>
