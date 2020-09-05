<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="netflix";
// Create connection
$conn = new mysqli($servername,$username,$password,$db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully.";
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$password = mysqli_real_escape_string($conn, $_REQUEST['password']);

// Attempt insert query execution
$sql = "INSERT INTO signup (email,password) VALUES ('$email', '$password')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);

}
?>
