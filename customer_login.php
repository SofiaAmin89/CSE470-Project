<?php
 session_start();
?> 
<!DOCTYPE html>
<html>
<head>
	<title> Login Page </title>
	<link rel = "stylesheet" href  ="../view/styles/style2.css" >


</head>

<body>
	<div class ="loginBox">
		
		<h2> User Login </h2>
		<form action="../model/verify_customer.php" method="POST">
			<p> Username </p>
			<input type ="text" class="form-control" id="user" name="user" placeholder ="Enter Username ">
			<p> Password </p>
			<input type ="password" class="form-control" id="pass" name="pass" placeholder="Enter Password ">
			<input type ="submit" name=""  value ="Sign In">
			
		</form>

	</div>


</body>

</html>
<?php
    unset($_SESSION["error"]);
?>