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

    $sql = "SELECT * FROM test_table";
    $res = mysqli_query($conn, $sql);

    if (mysqli_num_rows($res) > 0) {
        echo "<table border='1' width=50%>
                <tr>
                    <th>ID</th>
                    <th>Test Field</th>
                </tr>";
        
        while ($row = mysqli_fetch_assoc($res)) {
            echo "<tr>
                    <td>" . $row['id'] . "</td>
                    <td>" . $row['test_field'] . "</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No records found.";
    }
} else {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_close($conn);
?>
