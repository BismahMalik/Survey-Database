
<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', 'admin123','surveydb');

// get the post records
$txtSurveyID = $_POST['txtSurveyID'];
$txtQuestionID = $_POST['txtQuestionID'];
$txtOfferedResID = $_POST['txtOfferedResID'];
$txtPersonID = $_POST['txtPersonID'];
$txtOther_Response = $_POST['txtOther_Response'];


// database insert SQL code
$sql = "INSERT INTO `Response` (`SurveyID`, `QuestionID`, `OfferedResID`, `PersonID`, `Other_Response` ) VALUES ('$txtSurveyID','$txtQuestionID', '$txtOfferedResID', '$txtPersonID', '$txtOther_Response')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Records Inserted";
}

?>
