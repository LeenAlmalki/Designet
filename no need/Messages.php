<?php
session_start();


/*if (isset($_SESSION['Username'])&& $_SESSION['usertype'] == 'admin') {

 ?>
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="StyleSheet" href="CSS/style.css" />
    <link href="CSS/styleTable.css" rel="stylesheet" />
	<script type="text/javascript" src="#"></script>
    <title>Home page</title>
  </head>
    <header>
      <img id="header" src="images/header.jpg" />
      <img id="logo" src="images/logo.jpg" />
      <div class="head"> <ul>
        <li><a href="Home.php">Home</a></li>
        <li><a href="Services.php">Services</a></li>
      <li><a href="Messages.php">Messages</a></li>
      <li><a href="Logout.php">Logout</a></li>
      </ul> </div>
    </header>
    </html>*/
    <?php
include "db_connect.php";

    $sql = "select * from messages(name, email, subject, message)VALUES('$name','$email','$subject','$message')";
    $results = mysqli_query($conn,$sql);
  /*  echo "<table class='gridtable'>";
echo "<th> Name </th> <th> Email </th> <th> Subject </th> <th> Message </th>";

while( $row = mysqli_fetch_assoc($results) )
{
echo '<tr>
<td>'.$row['name'].'</td>
<td>'.$row['email'].'</td>
<td>'.$row['subject'].'</td>
<td>'.$row['message'].'</td>
</tr>';

}

echo "</table>";*/
if(!filter_var ($email, FILTER_VALIDATE_EMAIL)){
echo "Error: Please enter a valid email";
exit();
}

$to = "dina.adly.dal@gmail.com";
/* Next we have to add a subject */
$subject = $name. " has a question for you";
$headers = "MIME-Version: 1.0" , "\r\n";
$headers = "Content-type: text/html;charset=UTF-8" . "\r\n";
/* We have to add also a From: header, because we want to know the users email address */
$headers = "From: ". $email . "\r\n";
/* Next we are sending the email */
$send = mail($to, $subject, $headers, $message);
/* And last we check if the matl() function was successful */
if(!$send){
echo "Error: Message not send. Please try again";
else{
echo "Message was send successfuly";
 ?>
 /*<?php
 }else{
      header("Location: Home.php");
      exit();
 }*/
  ?>
