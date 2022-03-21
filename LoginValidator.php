<?php
session_start();
include "db_connect.php";

if (isset($_POST['Uname']) && isset($_POST['Pass'])){

  function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

  }
  $uname = validate($_POST['Uname']);
  $Pass = validate($_POST['Pass']);
  $_SESSION['Username']=$uname;
  if (empty($uname)){
	$_SESSION['error'] = "Username is Required";
	header("location:Login.php");
    exit();

  }else if(empty($Pass)){
	$_SESSION['error'] = "Password is Required";
    header("location:Login.php");
	exit();

  }else{
    $sql="SELECT * FROM users where Username='".$uname."'AND Password='".$Pass."'";
    $result=mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) === 1){
      $row = mysqli_fetch_assoc($result);
      if ($row['Username'] === $uname && $row['Password'] === $Pass){
          $_SESSION['ID'] = $row['ID'];
          $_SESSION['Username'] = $row['Username'];
          $_SESSION['Name'] = $row['Name'];
          $_SESSION['usertype'] = $row['usertype'];
          header('location:Home.php');}
          else {
			$_SESSION['error'] = "Incorect Username or Password";
			header("location:Login.php");
            exit();
            // code...
          }
      }else{
		$_SESSION['error'] = "Incorect Username or Password";
        header("location:Login.php");
		exit();

      }

    }
  }
else{
  header("location:Login.php");
  exit();
}

 ?>
