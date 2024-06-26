<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', 'admin123','surveydb');

// get the post records
$txtUsername = $_POST['txtUsername'];
$txtPass = $_POST['txtPass'];

// database insert SQL code
$sql = "INSERT INTO `login` (`Username`, `Pass`) VALUES ('$txtUsername','$txtPass')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Registered";
header("Location: Homepage.html");
}
?>