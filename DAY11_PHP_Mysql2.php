<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "joswin_db";

// Procedural Approach
// $conn = mysqli_connect($servername, $username, $password, $dbname);

// if ($conn) {
//     echo "Connected to " . $dbname . " established successfully";
// } else {
//     die("Connecty failed : " . mysqli_connect_error());
// }

// Object Oriented approach
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed : " . $conn->connect_error);
} else {
    echo "Connected to " . $dbname . " established successfully";
}
?>
