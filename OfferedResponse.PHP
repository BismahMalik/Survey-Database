
<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', 'admin123','surveydb');

// get the post records
$txtID = $_POST['txtID'];
$txtResponse = $_POST['txtResponse'];

// database insert SQL code
$sql = "INSERT INTO `offered_response` (`OfferedResID`, `Response`) VALUES ('$txtID','$txtResponse')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Records Inserted";
}

?>
