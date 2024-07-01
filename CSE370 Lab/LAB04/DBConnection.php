<?php
$servername = "localhost";
$username = "root"; #User name
$password = "server12"; #Password set for the user
$dbname= "CSE370Lab04"; #Give your database name
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully"
?>