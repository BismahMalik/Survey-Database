<?php


// Create connection
$connction = mysqli_connect('localhost', 'root', 'admin123','surveydb');

// get the post records
$txtID = $_POST['txtID'];
$txtResponse = $_POST['txtResponse'];

if ($connction->connect_error) {
  die("Connection failed: " . $connction->connect_error);
}

// sql to Update a record
$sql = "Update offered_response Set Response='$txtResponse' WHERE OfferedResID='$txtID'";

if ($connction->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$connction->close();
?>