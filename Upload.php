<?php
session_start();

if (isset($_SESSION['Username'])&& $_SESSION['usertype'] == 'Customer') {

 ?>
  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="StyleSheet" href="CSS/style.css" />
	<script type="text/javascript" src="#"></script>
    <title>Drag & Drop or Browse: File Upload</title>
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
  <form method="post" action="uploadd.php" enctype="multipart/form-data" id="mainForm">
     <fieldset>
  <p id="p3">Please upload a 3D shoot of the design you wish to execute</p>
  <div class="drag-area">
    <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
    <header>Upload your files here or</header>
    <!-- Added styling there -->
      <input type="file" name="fileToUpload" id="fileToUpload" class="browse" style="
                                                                                      padding: 10px 25px;
                                                                                      width:50%;
                                                                                      font-size: 18px;
                                                                                      font-weight: 500;
                                                                                      border: none;
                                                                                      outline: none;
                                                                                      background: #1950a3;
                                                                                      color: white;
                                                                                      border-radius: 5px;
                                                                                      cursor: pointer;">
  </div>
  <script src="upload.js"></script>
  <div class="desc"><p>
  <label> Write a description of the wanted implementation</label><br/>
  <textarea name="description" rows="5" id ="description" cols="61"></textarea>
  </p>

  <div class="box">
     <p>
     <label>Specify a due date<br/>
     <input type="date"  name="date" >
   </p> <div>
   <div class="rectangle centered">
      <input type="submit" value="Upload Image" name="submit" class="rounded">


</fieldset>
</form>
</body>
</html>
?>
<?php
}else{
     header("Location: Home.php");
     exit();
}
 ?>
