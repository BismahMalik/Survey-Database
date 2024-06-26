<?php


// Create connection
$connction = mysqli_connect('localhost', 'root', 'admin123','surveydb');

// get the post records
$txtOrganization = $_POST['txtOrganization'];
$txtID = $_POST['txtID'];


if ($connction->connect_error) {
  die("Connection failed: " . $connction->connect_error);
}

// sql to Update a record
$sql = "Update organizations Set OName='$txtOrganization'  WHERE Organization_id='$txtID'";

if ($connction->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$connction->close();
?>