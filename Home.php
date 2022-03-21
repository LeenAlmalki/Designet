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
			?>



        </ul>
	</div>
 </header>

             <body>
               <h2>ABOUT DESIGNET </h2>
               <p id="p1">A platform that connects designers with workers who
                 can execute custom designs that are hard to find ready-made
                 in the market with only one click </p>

               <h3>You'll Be Connected With </h3>
               <p id="p2">All internal and external carpentry  // Handmade furniture  //
                 Complete refurbishment // Property maintenance  // Finish
                 custom carpentry  // Much more...</p>
               </body>
               <footer>
                 <img id="footer" src="images/footer.jpg" />
               </footer>
               </html>
