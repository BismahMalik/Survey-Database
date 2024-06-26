<?php


// Create connection
$connction = mysqli_connect('localhost', 'root', 'admin123','surveydb');
$txtQuestionID= $_POST['txtQuestionID'];
if ($connction->connect_error) {
  die("Connection failed: " . $connction->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM question WHERE QuestionID='$txtQuestionID'";

if ($connction->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$connction->close();
?>