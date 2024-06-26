
<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', 'admin123','surveydb');

// get the post records
$txtOrganization = $_POST['txtOrganization'];
$txtID = $_POST['txtID'];

// database insert SQL code
$sql = "INSERT INTO `organizations` (`OName`, `Organization_id`) VALUES ('$txtOrganization','$txtID')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Records Inserted";
}

?>
