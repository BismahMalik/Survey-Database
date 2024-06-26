
<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', 'admin123','surveydb');

// get the post records
$txtFirstName= $_POST['txtFirstName'];
$txtLastName = $_POST['txtLastName'];
$txtEmail = $_POST['txtEmail'];
$txtAddress = $_POST['txtAddress'];
$txtDesignation = $_POST['txtDesignation'];
$txtStaff_ID = $_POST['txtStaff_ID'];
$txtOrganization_ID = $_POST['txtOrganization_ID'];


// database insert SQL code
$sql = "INSERT INTO `Staff` (`FirstName`,`LastName`, `Email`,`Address`, `Designation`, `Staff_ID`, `Organization_ID` ) VALUES ('$txtFirstName','$txtLastName', '$txtEmail' , '$txtAddress', '$txtDesignation', '$txtStaff_ID', '$txtOrganization_ID')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Records Inserted";
}

?>
