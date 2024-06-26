
<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', 'admin123','surveydb');

// get the post records
$txtSurvey_ID= $_POST['txtSurvey_ID'];
$txtQuestionID = $_POST['txtQuestionID'];


// database insert SQL code
$sql = "INSERT INTO `survey_questionnaire` (`Survey_ID`, `QuestionID`)VALUES ('$txtSurvey_ID','$txtQuestionID')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Records Inserted";
}

?>
