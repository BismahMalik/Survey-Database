
<?php
// Create connection
$connction = mysqli_connect('localhost', 'root', 'admin123','surveydb');
$txtSurveyTeam_id = $_POST['txtSurveyTeam_id'];
if ($connction->connect_error) {
  die("Connection failed: " . $connction->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM survey_team WHERE SurveyTeam_id='$txtSurveyTeam_id'";

if ($connction->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$connction->close();
?>