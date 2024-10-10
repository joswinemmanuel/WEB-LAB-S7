<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "joswin_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn) {
    echo "Connected to " . $dbname . " established successfully";
} else {
    die("Connecty failed : " . mysqli_connect_error());
}
?>
