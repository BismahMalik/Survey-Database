
<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', 'admin123','surveydb');

// get the post records
$txtSurveyID= $_POST['txtSurveyID'];
$txtTopic = $_POST['txtTopic'];
$txtSDescription = $_POST['txtSDescription'];
$txtStartedOn= $_POST['txtStartedOn'];
$txtEndedOn = $_POST['txtEndedOn'];


// database insert SQL code
$sql = "INSERT INTO `Survey` (`SurveyID`,`Topic`, `SDescription`,`StartedOn`, `EndedOn`)VALUES ('$txtSurveyID','$txtTopic', '$txtSDescription' , '$txtStartedOn', '$txtEndedOn')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Records Inserted";
}

?>
