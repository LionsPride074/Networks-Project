<?php
$host = "localhost";
$user = "alyon4";
$pass = "alyon4";
$dbname = "alyon4";

//Create connection
$conn = new mysqli($host,$user,$pass,$dbname);
//Check connection
if($conn->connect_error)
{
	echo "Could not connect to server\n";
	die("Connection failed: ". $conn->connect_error);
}
$email = $_POST['email'];
$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "INSERT INTO FinalUsers (email, username, password)
VALUES ('$email', '$username', '$password');";

if ($conn->query($sql) === TRUE) {
	header("Location: https://codd.cs.gsu.edu/~alyon4/finalSuccess.html");
	exit();
}
else {
	echo "Error creating user: " . $conn->error;
}
?>