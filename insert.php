<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yashwanti_admin";


$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST['name'];
$email = $_POST['email'];
$mob = $_POST['mob'];
$mes = $_POST['mes'];

$sql = "INSERT INTO contact(name, email, mob, mes) values('$name', '$email', '$mob', '$mes')";
if ($conn->query($sql) === TRUE) {
	header('location:index.html');
} else {
	echo "Error: Can't enter message. Please call Company Exceutive " . $sql . "<br>" . $conn->error;
}
