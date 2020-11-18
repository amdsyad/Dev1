<?php 

if (isset($_GET['url'])) {
	$redirect = $_GET['url'];  
	header("Location: " . $redirect);

}

?>


<!DOCTYPE html>
<html>
<body style="background-color: pink";>
	<!-- url=http:// -->
<h1>Welcome To User2</h1>

<p>How to Redirect Me -><- </p>

<a href="https://google.com">
   <button>Visit Evil</button>
</a>
	


</body>
</html>
