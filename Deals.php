<?php
session_start();

if (isset($_SESSION['Username'])&& $_SESSION['usertype'] == 'VR') {

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
     ?>



        </ul>
 </div>
 </header>

 <h2> Choose the project you would like to work on and make an offer</h2>
</body>
</html>
?>
<?php
}else{
     header("Location: Home.php");
     exit();
}
 ?>
