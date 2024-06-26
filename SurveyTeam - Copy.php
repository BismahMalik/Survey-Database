
<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', 'admin123','surveydb');

// get the post records
$txtSurveyTeam_id = $_POST['txtSurveyTeam_id'];
$txtTotalMembers = $_POST['txtTotalMembers'];
$txtSurvey_id= $_POST['txtSurvey_id'];
$txtStaff_id= $_POST['txtStaff_id'];


// database insert SQL code
$sql = "INSERT INTO `Survey_Team` (`SurveyTeam_id`,`TotalMembers`, `Survey_id`,`Staff_id`)VALUES ('$txtSurveyTeam_id','$txtTotalMembers', '$txtSurvey_id' , '$txtStaff_id')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Records Inserted";
}

?>
