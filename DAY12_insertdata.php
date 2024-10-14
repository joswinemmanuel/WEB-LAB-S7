<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "joswin_db";

// Procedural Approach
$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn) {
    echo "Connection to " . $dbname . " established successfully";
    $sql = "INSERT INTO test_table(test_field) VALUES ('$_POST[testfield]')";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        echo '<br/>Data Inserted successfully!';
    } else {
        die("Error: " . mysqli_error($conn));
    }
} else {
    die("Connecty failed : " . mysqli_connect_error());
}
mysqli_close($conn);
?>
