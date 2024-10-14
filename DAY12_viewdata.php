<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "joswin_db";

// Procedural Approach
$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn) {
    echo "Connection to " . $dbname . " established successfully";
    $sql = "SELECT * FROM test_table";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        echo '<br/>Data:<br/>';
        while ($row = mysqli_fetch_assoc($res)) {
            echo 'ID: ' . $row['id'] . ', Name: ' . $row['test_field'] . '<br/>';
        };
    } else {
        die("Error: " . mysqli_error($conn));
    }
} else {
    die("Connecty failed : " . mysqli_connect_error());
}
mysqli_close($conn);
?>  
