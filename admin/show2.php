<?php
	$servername = "localhost";
	$username = "root"; 
	$password = "";
	$dbname = "yashwanti_admin";


	$conn = mysqli_connect($servername, $username, $password, $dbname); 
	if (!$conn){     
	 		die("Connection failed: " . mysqli_connect_error()); 
		}
		$sql2 = "SELECT * FROM contact where status ='READ'";
		$result2=mysqli_query($conn,$sql2);

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
  </head>
  <body>
    <div>
      <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Mobile</th>
                  <th scope="col">Message</th>
                  <th scope="col">Date/Time</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>

			<?php

			    if ($result2->num_rows > 0) {
			        while ($row = $result2->fetch_assoc()) {
			          $name   = $row['name'];
			          $email = $row['email'];
			          $mob = $row['mob'];
			          $mes = $row['mes'];
			          $dates = $row['dates'];
			          $sr = $row['sr'];
			        
			        ?>
			            <tr>
			            <th scope="row"><?php echo $name; ?></th>
			            <td><?php echo $email; ?></td>
			            <td><?php echo $mob; ?></td>
			            <td><?php echo $mes; ?></td>
			            <td><?php echo $dates; ?></td>
			            <td><input type="button" value="Archive" class="btn btn-warning" onclick="window.location='archive.php?sr=<?php echo $sr; ?>' "></td>
			            </tr>
			                
			<?php }} 
			else{
				echo "<tr><td>0 Records</td></tr>";
			} ?>

			</table>
    </div>
    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>