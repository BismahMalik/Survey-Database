<?php


// Create connection
$connction = mysqli_connect('localhost', 'root', 'admin123','surveydb');


// get the post records
$txtPersonID = $_POST['txtPersonID'];
$txtFirstName = $_POST['txtFirstName'];
$txtLastName = $_POST['txtLastName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];

if ($connction->connect_error) {
  die("Connection failed: " . $connction->connect_error);
}

// sql to Update a record
$sql = "Update person Set FirstName='$txtFirstName', LastName='$txtLastName', Email='$txtEmail' , Phone='$txtPhone' WHERE PersonID='$txtPersonID'";

if ($connction->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$connction->close();
?>