<?php


// Create connection
$connction = mysqli_connect('localhost', 'root', 'admin123','surveydb');

// get the post records
$txtPersonId = $_POST['txtPersonId'];
$txtSurveyTeamId= $_POST['txtSurveyTeamId'];
$txtOrganizationId=$_POST['txtOrganizationId'];
$txtQuestionId=$_POST['txtQuestionId'];
$txtOfferedResId=$_POST['txtOfferedResId'];
$txtSurveyId=$_POST['txtSurveyId'];
$txtStaffId=$_POST['txtStaffId'];

if ($connction->connect_error) {
  die("Connection failed: " . $connction->connect_error);
}

// sql to Update a record
$sql = "Update admins Set SurveyTeamId='$txtSurveyTeamId' , OrganizationId='$txtSurveyTeamId' , QuestionId='$txtQuestionId' , OfferedResId ='$txtOfferedResId' ,SurveyId='$txtSurveyId' , StaffId = '$txtStaffId' WHERE PersonId='$txtPersonId'";

if ($connction->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$connction->close();
?>