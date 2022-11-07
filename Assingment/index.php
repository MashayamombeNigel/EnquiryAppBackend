<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect("localhost","root","","enquirydb");
$query="SELECT * FROM user where username='$username' and password='$password'";
$res=mysqli_query($con,$query);
$rows = mysqli_num_rows($res);
session_start();
 if($rows==1){
 	header('location:Main.php');
 	$_SESSION['username']=$username;
 }
else{
	echo "INVALID USERNAME AND PASSWORD";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/main1.css">
</head>
<body>
<div class="header">
	<h3> iMobile Planet</h3>
		<ul>
			<li><a href="Home.php">Home</a></li>
			
		</ul>
</div>
	<div class="formbox">
		<h2>Login</h2>
		<form method="POST" action="index.php">
			<input type="text" name="username" placeholder="Enter your username">
			<input type="password" name="password" placeholder="Enter your password">
			<input type="submit" value="LOGIN">   
		
		</form>
	</div>
	<footer class="footer">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <div class="copy"> &copy; Shrapnel Technologies 2022 <hr><br></div>
      </footer>
      <script src="https://kit.fontawesome.com/c69fab0add.js" crossorigin="anonymous"></script> 
</body>
</html>