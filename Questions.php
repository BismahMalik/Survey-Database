
<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', 'admin123','surveydb');

// get the post records
$txtQuestionID = $_POST['txtQuestionID'];
$txtQuestion = $_POST['txtQuestion'];


// database insert SQL code
$sql = "INSERT INTO `question` (`QuestionID`, `Question` ) VALUES ('$txtQuestionID','$txtQuestion')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Records Inserted";
}

?>
