<?php
	$servername = "localhost";
	$username = "root"; 
	$password = "";
	$dbname = "yashwanti_admin";


	$conn = mysqli_connect($servername, $username, $password, $dbname); 
	if (!$conn){     
	 		die("Connection failed: " . mysqli_connect_error()); 
		}

		$sr = $_GET['sr'];

		$sql = "DELETE FROM contact where sr=".$sr;
		if ($conn->query($sql) === TRUE) {
			header('location:show3.php');
		}
		else{
			echo "Errooorrr";
		}
?>