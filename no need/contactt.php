<?php
$connection = mysqli_connect("localhost","root","","Designet");
$msg = "Submit The Form";
if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$sql = "INSERT INTO messages(name, email, subject, message)VALUES('$name','$email','$subject','$message')";
$result = mysqli_query($connection,$sql);
if($result){
	$msg = "Message sent";
}else{
	$msg = "Message not sent";
}
}
?>
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
      <img id="logo" src="images/logo.jpg" />
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
             <li><a href="Messages.php">Messages</a></li>
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
			<h3><?php echo $msg; ?></h3>
		</body>
	</html>
