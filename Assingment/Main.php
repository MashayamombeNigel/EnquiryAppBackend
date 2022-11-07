<?php
session_start();
$uname=$_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/main1.css">
</head>
<body>
	<div class="header">
		<ul>
			<li><a href="Home.php">Home</a></li>
			<li><a href="ViewEnquiry.php">View Enquiries</a></li>
		</ul>

		<div class="user_info">
			Welcome <?php echo "$uname"; ?>
			<a href="logout.php">Logout</a>
	       </div>
	</div>

	<footer class="footer">
       
            <span>Socials</span>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <div class="copy"> &copy; Shrapnel Technologies 2022 <hr><br></div>
          
      </footer>
      <script src="https://kit.fontawesome.com/c69fab0add.js" crossorigin="anonymous"></script> 
	
</body>
</html>