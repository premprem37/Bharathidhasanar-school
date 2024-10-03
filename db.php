<?php
$servername = "localhost"; // Your server name
$username = "root"; // Your database username
$password = "NO"; // Your database password
$dbname = "school_db"; // Your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
