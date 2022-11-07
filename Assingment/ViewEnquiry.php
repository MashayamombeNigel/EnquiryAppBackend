<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" href="css/main1.css">
	<title>View</title>

</head>
<body>
    <div class="header">
        <ul>
            <li>| <a href="Home.php">Home</a></li>
            <li><a href="Main.php">Previous</a></li>
        </ul>

        <div class="user_info">
            Welcome |
            <a href="logout.php">Logout</a> |
           </div>
    </div>
    <div >
        <h2>Enquiries</h2>
    </div>

<table >
    <thead>
       <tr><th>ID</th>
           <th>Username</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Enquiry</th>
            <th>Response</th>
            <th>Action</th>   
        </tr>
    </thead>
    <tbody>       

    <?php
	    try
            {
             $con = new PDO("mysql:host=localhost;dbname=enquirydb",'root','');


            $sth = $con->prepare( "SELECT * FROM `enquiries` ORDER BY 1 DESC");
                            
            $sth->setFetchMode(PDO:: FETCH_OBJ);
                            
            $sth->execute();
            $i=1;
            while($row=$sth->fetch())
        {   
    ?>

        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row->username; ?></td>
            <td><?php echo $row->Email; ?></td>
            <td><?php echo $row->Phone;?></td>
            <td><?php echo $row->Enquiry;?></td>
            <td><?php echo $row->Response;?></td>
            <td><a href= "responsePage.php">Edit</a></td>";
        </tr>
            <?php } }
                            
                catch(PDOException $e){
                echo "Error: ". $e->getMessage();
             }

            ?>
    </tbody>
</table>
</body>
</html>