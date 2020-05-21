<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}


$Adnum=$_REQUEST['Adnum'];
$query = "DELETE FROM student_application WHERE Adnum=$Adnum";
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: manage-categories.php"); 
 ?>