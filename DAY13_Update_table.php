<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "joswin_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn) {
    echo "<h4>Connection to " . $dbname . " established successfully</h4>";

    $sql = "UPDATE test_table SET test_field='I love Python' WHERE id=2";
    
    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    } else {
        die("Error updating record : " . mysqli_error($conn));
    }
} else {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_close($conn);
?>
