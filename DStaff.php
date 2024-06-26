
<?php


// Create connection
$connction = mysqli_connect('localhost', 'root', 'admin123','surveydb');
$txtStaff_ID= $_POST['txtStaff_ID'];
if ($connction->connect_error) {
  die("Connection failed: " . $connction->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM staff WHERE Staff_ID='$txtStaff_ID'";

if ($connction->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$connction->close();
?>