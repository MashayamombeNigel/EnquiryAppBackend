<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php

include_once("config.php");

if(isset($_POST['Submit'])) {	
	$name = mysqli_real_escape_string($mysqli, $_POST['username']);
	$phone = mysqli_real_escape_string($mysqli, $_POST['Phone']);
	$email = mysqli_real_escape_string($mysqli, $_POST['Email']);
	$enquiry = mysqli_real_escape_string($mysqli, $_POST['Enquiry']);
	
	
	if(empty($name) || empty($phone) || empty($email) ||empty($enquiry)) {
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($phone)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		if(empty($enquiry)) {
			echo "<font color='red'>Enquiry field is empty.</font><br/>";
		}
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else {	
		$result = mysqli_query($mysqli, "INSERT INTO enquiries(username,Email,Phone,Enquiry) VALUES('$name','$age','$email' , '$enquiry' )");
		
		
		echo '<script>Window .alert("Enquiry recorded successfully.");</script>';
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
