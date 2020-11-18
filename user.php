<!DOCTYPE html>
<html>
<body style="background-color: pink";>
<h1>Welcome To User1</h1>
<form method="GET" action="#">
	<center><strong><label for="search">Pop-Up Your XSS</label></center></strong>
	<center><input type="search" id="search" name="search"></center>
	<center><input type="submit"></center>
</form>
<h1> <?php echo $_GET['search'] ?></h1>

</body>
</html>