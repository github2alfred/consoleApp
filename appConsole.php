<?php
$servername = "rm-zf8zjq6zm8102oj3i.mysql.kualalumpur.rds.aliyuncs.com";
$username = "alfred";
$password = "P@ssw0rd";
$dbname = "testdb001";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, k FROM sbtest1 limit 5";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "\n Number: " . $row["id"]. " - EmployeeID: " . $row["k"].  "\n";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
