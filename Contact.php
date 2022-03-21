<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="StyleSheet" href="CSS/style.css" />
	<script type="text/javascript" src="#"></script>
    <title>Home page</title>
  </head>
    <header>
      <img id="header" src="images/header.jpg" />
      <img id="logo" src="images/Designet.png" />
      <div class="head">
     <ul>
            <li><a href="Home.php">Home</a></li>
            <li><a href="Services.php">Services</a></li>

     <?php if(empty($_SESSION['usertype'])) {?>
            <li><a href="Contact.php">Contact</a></li>
            <li><a href="Login.php">Login</a></li>
     <?php }
     else
 		{
 			if($_SESSION['usertype'] == 'admin') {?>
           <!--  <li><a href="Messages.php">Messages</a></li> -->
 			<?php }
       else if($_SESSION['usertype'] == 'Customer')	 {?>
            <li><a href="Contact.php">Contact</a></li>
            <li><a href="Upload.php">Upload your design</a></li>
       <?php }
       else if($_SESSION['usertype'] == 'VR')	 {?>
         <li><a href="Deals.php">View Projects</a></li>
       <?php }
       ?>


       <li><a href="Logout.php">Logout</a></li>

       <?php
     }
       ?></div>
    </header>
    <body>
      <div class="container">

  <form id="contact" action="https://formsubmit.co/dina.adly.dal@gmail.com" method="post">
    <fieldset>
      <input placeholder="Your name" type="text" name="name" id="name" tabindex="1" required autofocus>

      <input placeholder="Your Email Address" type="email" name="email" id="email" tabindex="2" required>

      <input placeholder="Subject" type="text" name="subject" id="subject" tabindex="2" required>

      <textarea placeholder="Type your message here...." name="message" id="message" tabindex="5" required></textarea>

      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>

</body>
</html>
