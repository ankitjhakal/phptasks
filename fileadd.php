<?php
session_start();
if(isset($_GET['q'])){
  $a=$_GET['q'];
  header ("location: $a.php");
}
 if(!isset($_SESSION['user1']))
 {
   header('location: seventask.php');
 }
 // save file on browser and memory
 else{
   $fname=$_POST['fname'];
   $lname=$_POST['lname'];
   $pno=$_POST['pno'];
   $email=$_POST['email'];
   if (!preg_match("/^[a-zA-Z ]+$/i",$fname) || !preg_match("/^[a-zA-Z ]+$/i",$lname)){
     echo "only alphabet allow" ;
     include('5.php');
   }
   else{
     echo "Hello " .$fname. " " .$lname;

   }
   $filename=$_FILES['image']['name'];
   $tempname=$_FILES['image']['tmp_name'];
   $folder="ankit/".$filename;
   move_uploaded_file($tempname,$folder);
   echo"<br><img src='$folder' height='100' width='100'/>";

    $data=$_POST['comment'];
   $data1= explode("\n", $data);

   echo "<table><tr><th>subject</th><th>marks</th></tr></table>";
   foreach($data1 as $key)
   {
     $data2= explode("|", $key);

   foreach($data2 as $key)
   {
     echo"<tr>$key</tr>";
   }
   echo "<br>";
   }
   if(!preg_match("/^[0-9]{10}$/",$pno)){
     echo "only numbers r allow" ;
     include('first.php');
   }
   else {
     echo "<i>+91" .$pno."";
   }

   if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
     echo "<br>email is not valid" ;
     include('first.php');
   }
   else {
     echo "<br>" .$email." ";
   }


   $myfile =fopen("ankit/testfile.doc", "w");
  $data3= $fname." ".$lname."\n".$pno."\n".$email;
  fwrite($myfile,$data3);
  fclose($myfile);


 }
