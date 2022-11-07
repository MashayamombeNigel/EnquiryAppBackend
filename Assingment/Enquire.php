<html>
<head>
    <title>Contact us form using php mysql</title>
    <link rel="stylesheet" href="css/enquiryform.css">
  
</head>
<body>
    <header class="header">
        <div class="nav-items">
           <nav>
              <a href="#" class="logo">Mobile Planet</a>
            <button class="hamburger" id="hamburger">
            <h3>Menu</h3>
            </button>
            <ul class="nav-ul" id="nav-ul">
              <li><a href="Home.php" class="links">Home</a></li>
              <li><a href="About-Us.php" class="links">About</a></li>
              <li><a href="Catalog.php" class="links">Catalog</a></li>
              <li><a href="#" class="links">Enquire</a></li>
              <li><a href="index.php" class="links">Admin Login</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <center>
        <h1 class="enquire">Enquiries</h1>
   </center>

        <form action="form-process.php" method="POST">
            <fieldset>
         
                <label for="firstname">Firstname</label>
                <input type="text" name="firstname" id="firstname"  required>
           
                <label for="lastname">Lastname</label>
                <input type="text" name="lastname" id="lastname" required>
            
                <br><label for="phone">Phone</label><br>
                <input type="tel" name="phone" id="phone" required><br>
          
                <br><label for="email">Email</label><br>
                <input type="email" name="email" id="email" required>
                
                <textarea rows="6" placeholder="Your Message" id="message" name="message" required></textarea>
          
                 <button  type="submit">Submit</button>
                 <button type="reset">Reset</button>
  
            </fieldset>

           <center><a href="searchData.php" id="get_inquiry">Get Enquiry</a></center>
        </form>
        </div>
        <footer >
        <div class="copy"> &copy; Shrapnel Technologies 2022 </div>
        </footer>
        <script src="https://kit.fontawesome.com/c69fab0add.js" crossorigin="anonymous"></script> 
        <script src="script.js"></script>
    
</body>
</html>