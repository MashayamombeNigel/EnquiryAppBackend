<?php



if(isset($_POST['update']))
{
    
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "enquirydb";
   
   $connect = mysqli_connect($hostname, $username, $password, $databaseName);
   
  
   
   $id = $_POST['id'];
    $name = $_POST['username'];
    $phone = $_POST['Phone'];
    $email = $_POST['Email'];
    $enquiry = $_POST['Enqiry'];    
    $response= $_POST['Response'];
           
 
   
$query = "UPDATE `enquiries` SET `username`='".$name."',`email`='".$email."' , `enquiry`='".$enquiry."' , `Response`='".$response.",`Phone`= $phone WHERE `id`=$id";
   
   $result = mysqli_query($connect, $query);
   
   if($result)
   {
       echo '<script type="text/javascript">
    window.alert("Updated")
</script>';
   }else{
   echo' <script type="text/javascript">
    window.alert("Not Updated")
</script>
       ';
   }
   mysqli_close($connect);
}

?>

<!DOCTYPE html>

<html>

    <head>

        <title>Respond Form </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/main1.css">

    </head>

    <body>
    
        <div class="header">
        <ul>
            <li><a href="Home.php">Home</a></li>
            <li><a href="ViewEnquiries.php">Previous</a></li>
        </ul>

        <div class="user_info">
            <a href="logout.php">Logout</a>
           </div>
    </div>
    <h2>Response Form</h2>

        <form class="frm-update" action="responsePage.php" method="post">

            <fieldset >

            ID To Update: <input type="text" name="id" required><br><br>

            Username : <br>
            <input type="text" name ="name" required>
            <br>

            Email : <br>
            <input type="email" name ="email"  >
            <br>

            Phone : <br>
            <input type= "number" name ="phone" >
            <br>

            Enquiry: <br>
            <textarea rows="6" name="enquiry" ></textarea>
            <br>

            Response: <br>
            <textarea rows="6" placeholder="Your Message" id="message" name="response" ></textarea>
            <br>

            <input type="submit" name="update" value="Update Data">

</fieldset>
        </form>

        <footer class="footer">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <hr><div class="copy"> &copy; Shrapnel Technologies 2022 <br></div>
    </footer>
    <script src="https://kit.fontawesome.com/c69fab0add.js" crossorigin="anonymous"></script> 

    </body>


</html>
