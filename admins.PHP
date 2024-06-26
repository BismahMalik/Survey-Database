<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', 'admin123','surveydb');

// get the post records
$txtPersonId = $_POST['txtPersonId'];
$txtSurveyTeamId= $_POST['txtSurveyTeamId'];
$txtOrganizationId=$_POST['txtOrganizationId'];
$txtQuestionId=$_POST['txtQuestionId'];
$txtOfferedResId=$_POST['txtOfferedResId'];
$txtSurveyId=$_POST['txtSurveyId'];
$txtStaffId=$_POST['txtStaffId'];

// database insert SQL code
$sql = "INSERT INTO `admins` (`Person_id`,`SurveyTeam_id`,`Organization_id`,`Question_id`,`Offered_res_id`,`Survey_id`,`Staff_id`) VALUES ('$txtPersonId','$txtSurveyTeamId','$txtOrganizationId','$txtQuestionId','$txtOfferedResId','$txtSurveyId','$txtStaffId')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Records Inserted";
}

?>