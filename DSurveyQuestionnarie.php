
<?php
// Create connection
$connction = mysqli_connect('localhost', 'root', 'admin123','surveydb');
$txtSurvey_ID= $_POST['txtSurvey_ID'];
if ($connction->connect_error) {
  die("Connection failed: " . $connction->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM survey_questionnarie WHERE Survey_ID='$txtSurvey_ID'";

if ($connction->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$connction->close();
?>