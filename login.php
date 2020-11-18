<?php
	include("connection.php");

	if(isset($_POST['submit'])){

		$uname = $_POST['username'];
		$pass = $_POST['password'];

		$sql = " select * from user where username = '$uname' and password = '$pass' ";
		$result = mysqli_query($conn,$sql); // execute query

		$count = mysqli_num_rows($result); // get row data = nak tahu ada data ke x de

		if($count == 1) {
			$row = mysqli_fetch_array($result); // fetch ni nk amik data dari database
			$userid = $row['id']; // id itu dari column database

			if($userid == 1){
				header("location: user.php");
			} else if ($userid == 2) {
				header("location: user2.php");
			} else if ($userid == 3) {
				header("location: user3.php");
			} else{
				echo "Invalid Id";
			}

      	} else {
         	echo  "Your Login Name or Password is invalid";
      }

	}
?>

<!DOCTYPE html>
<html>
<body style="background-color: pink";>
	<center><strong><h1>Welcome To Login Page Kedai Kopi!!! :)</h1></strong></center>
	<center><img src="gambar/kopi-login.jpg" width="300" height="300"></center><br>
</body>
	<form method="POST" action="#">
	<center><label for="username">Username: </label> <br></center>
	<center><input type="text" pattern="[a-zA-Z0-9]+" required="" id="username" name="username"> <br> </center>
	<center><label for="password">Password: </label> <br></center>
	<center><input type="password" required="" id="password" name="password"> <br></center>
	<center><input type="submit" value="submit" name="submit"></center>
	</form>
</html>
