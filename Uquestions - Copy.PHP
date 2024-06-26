<?php


// Create connection
$connction = mysqli_connect('localhost', 'root', 'admin123','surveydb');

// get the post records
$txtQuestionID = $_POST['txtQuestionID'];
$txtQuestion = $_POST['txtQuestion'];

if ($connction->connect_error) {
  die("Connection failed: " . $connction->connect_error);
}

// sql to Update a record
$sql = "Update question Set Question='$txtQuestion' WHERE QuestionID='$txtQuestionID'";

if ($connction->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$connction->close();
?>