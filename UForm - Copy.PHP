<?php


// Create connection
$connction = mysqli_connect('localhost', 'root', 'admin123','surveydb');
$txtEmail= $_POST['txtEmail'];
$txtAge= $_POST['txtAge'];
$txtPersonName= $_POST['txtPersonName'];

if ($connction->connect_error) {
  die("Connection failed: " . $connction->connect_error);
}

// sql to Update a record
$sql = "Update form Set PersonName='$txtPersonName', Age='$txtAge' WHERE Email='$txtEmail'";

if ($connction->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$connction->close();
?>