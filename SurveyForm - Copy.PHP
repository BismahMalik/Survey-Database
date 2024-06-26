
<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', 'admin123','surveydb');

// get the post records
$txtName= $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtAge= $_POST['txtAge'];
$txtQ1= $_POST['txtQ1'];
$txtQ2= $_POST['txtQ2'];
$txtQ3= $_POST['txtQ3'];



// database insert SQL code
$sql = "INSERT INTO `form` (`PersonName`, `Email`, `Age`, `Question01`,`Question02`,`Question03`) VALUES ('$txtName','$txtEmail', '$txtAge', '$txtQ1','$txtQ2', '$txtQ3')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Form Saved";
}

?>
