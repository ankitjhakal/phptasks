<?php
session_start();
//pagination
if(isset($_GET['q'])){
  $a=$_GET['q'];
  header ("location: $a.php");
}
//if session var is not set redirect to seventask then back to the form again
 if(!isset($_SESSION['user1']))
 {
   header('location: seventask.php');
 }
 //validation for task 1
 else
{


  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  if (!preg_match("/^[a-zA-Z ]+$/i",$fname) || !preg_match("/^[a-zA-Z ]+$/i",$lname)){
    echo "only alphabet allow" ;
    include('1.php');
  }
  else{
    echo "Hello " .$fname. " " .$lname;
    echo "<br><a href=/logout.php>logout</a>";
  }


}
?>
