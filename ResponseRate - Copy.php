
<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', 'admin123','surveydb');

// get the post records
$txtResponsePercent= $_POST['txtResponsePercent'];
$txtFinal_Result = $_POST['txtFinal_Result'];
$txtSurvey_ID = $_POST['txtSurvey_ID'];
$txtOrganization_ID = $_POST['txtOrganization_ID'];



// database insert SQL code
$sql = "INSERT INTO `response_rate` (`ResponsePercent`, `Final_Result`, `Survey_ID`, `Organization_ID` ) VALUES ('$txtResponsePercent','$txtFinal_Result', '$txtSurvey_ID', '$txtOrganization_ID')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Records Inserted";
}

?>
