<?php


// Create connection
$connction = mysqli_connect('localhost', 'root', 'admin123','surveydb');
$txtEmail= $_POST['txtEmail'];
if ($connction->connect_error) {
  die("Connection failed: " . $connction->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM form WHERE Email='$txtEmail'";

if ($connction->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$connction->close();
?>