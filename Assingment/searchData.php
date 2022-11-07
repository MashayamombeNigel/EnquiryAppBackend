
<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<link rel="stylesheet" href="css/enquiryform.css">
</head>
<body>
	<header class="header">
        <div class="nav-items">
           <nav>
              <a href="#" class="logo">Mobile Planet</a>
              <ul class="nav-ul" id="nav-ul">
              	<li><a href="Home.php" class="links">Home</a></li>
              	<li><a href="Enquire.php" class="links">Go Back</a></li>
 			  </ul>
       	 	</nav>
      	</div>
    </header>


<form method="post" id="srch_frm">
	<fieldset>
		<label>Search</label>
		<input type="text" name="search" placeholder="Enter Username">
		<input type="submit" name="submit">
	</fieldset>
	
</form>

</body>
</html>

<?php

$con = new PDO("mysql:host=localhost;dbname=enquirydb",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `enquiries` WHERE username = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table border=5 >
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Phone Number</th>
				<th>Enquiry</th>
				<th>Your response</th>
			</tr>
			<tr>
				<td><?php echo $row->username; ?></td>
				<td><?php echo $row->Email;?></td>
				<td><?php echo $row->Phone;?></td>
				<td><?php echo $row->Enquiry;?></td>
				<td><?php echo $row->Response;?></td>


			</tr>

		</table>
		<footer class="footer">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <hr><div class="copy"> &copy; Shrapnel Technologies 2022 <br></div>
    </footer>
    <script src="https://kit.fontawesome.com/c69fab0add.js" crossorigin="anonymous"></script> 

<?php 
	}
		
		
		else{
			echo '
        <script type ="text/javascript">
        window.alert("Data does not Exist");  
       
    </script>';
}


}

?>
