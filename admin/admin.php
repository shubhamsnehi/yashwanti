<?php
	$servername = "localhost";
	$username = "root"; 
	$password = "";
	$dbname = "yashwanti_admin";


	$conn = mysqli_connect($servername, $username, $password, $dbname); 
	if (!$conn){     
	 		die("Connection failed: " . mysqli_connect_error()); 
		}

	$username = $_POST['username'];
	$password = $_POST['password'];

	if ($username == 'admin' && $password == 'admin') {
		$sql2 = "SELECT * FROM contact where status ='READ'";
		$sql3 = "SELECT * FROM contact where status ='ARCHIVE'";

		
		$result2=mysqli_query($conn,$sql2);
		$result3=mysqli_query($conn,$sql3);
		?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Yashwanti Admin</title>
    <script type="text/javascript">
    	function show1() {
    		document.getElementById("show").innerHTML = '<iframe style="border:none;" width="100%" height="800px" src="show1.php" ></iframe>';
    	}
    	function show2() {
    		document.getElementById("show").innerHTML = '<iframe style="border:none;" width="100%" height="800px" src="show2.php" ></iframe>';
    	}
    	function show3() {
    		document.getElementById("show").innerHTML = '<iframe style="border:none;" width="100%" height="800px" src="show3.php" ></iframe>';
    	}
    </script>
  </head>
  <body>
    <div>
      <!-- As a link -->
        <nav class="navbar navbar-light bg-light">
          <h2 class="text-primary">Welcome to Yashwanti Admin Pannel</h2>
          <button type="button" class="btn btn-outline-danger mr-5" onclick="window.location='logout.php'">Logout</button>
        </nav>
    </div>
    <div class="mt-5">
    	<ul class="nav justify-content-center">
		  <li class="nav-item pr-5 pl-5">
		    <button type="button" class="btn btn-primary" onclick="show1()">Unread</button>
		  </li>
		  <li class="nav-item pr-5 pl-5">
		    <button type="button" class="btn btn-success" onclick="show2()">Read</button>
		  </li>
		  <li class="nav-item pr-5 pl-5">
		    <button type="button" class="btn btn-warning" onclick="show3()">Archived</button>
		  </li>
		</ul>
    </div>
    <div class="row mt-5">
    	<div class="col-2"></div>
    	<div class="col-8" id="show">
    	</div>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


















<?php

	}
	else{
		echo "Error";
	}
?>