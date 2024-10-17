<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "joswin_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn) {
    echo "<h4>Connection to " . $dbname . " established successfully</h4>";

    $sql = "DROP TABLE test11";
    
    if (mysqli_query($conn, $sql)) {
        echo "Table Deleted successfully";
    } else {
        die("Error Deleting Table : " . mysqli_error($conn));
    }

} else {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_close($conn);
?>
