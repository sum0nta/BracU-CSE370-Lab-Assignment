<?php
include 'DBConnection.php';
echo "</br>";
$name = $_POST['name'];
$ID = $_POST['id'];
$cg = $_POST['cg'];
echo $name." ".$ID." ".$cg ;
echo "<br>";

$sql = "INSERT INTO Student (Name, ID, CGPA)
VALUES ('$name', '$ID', '$cg')";

if ($conn->query($sql) == TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
