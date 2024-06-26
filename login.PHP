<?php
// Replace with your database credentials


// Create connection
$conn = mysqli_connect('localhost', 'root', 'admin123','surveydb');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Replace with your table and column names
$txtUsername = mysqli_real_escape_string($conn, $_POST['txtUsername']);
$txtPass = mysqli_real_escape_string($conn, $_POST['txtPass']);

// Query the database
$sql = "SELECT * FROM login WHERE Username = '$txtUsername' AND Pass = '$txtPass'";
$result = mysqli_query($conn, $sql);

// Check if a row was found
if (mysqli_num_rows($result) == 1) {
   echo 'Login Succesful'; 
header('Location: AdminMain.html');
// Login successful
    // Set session variables or redirect to a logged-in page
} 
else {
 $error = "Invalid username or password";
    header("Location: Admin.html?error=" . urlencode($error));
    exit;

}
// Close connection
mysqli_close($conn);
?>
