<?php
session_start();
// session session
// pagination
if(isset($_GET['q'])){
  $pageno=$_GET['q'];
  header("location: $pageno.php");
}
//if session var is not set then redirect it to seventask()
 if(!isset($_SESSION['user1']))
 {
   header('location: seventask.php');
 }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="fullnametask.php" method="post" enctype="multipart/form-data">
  	<input type="text" id="fname" name="fname" placeholder="Enter your first name"><br><br>
    <input type="text" id="lname" name="lname" placeholder="Enter your Last name"><br>
  	<input type="text" id="fullName" name="fullName" value="">
    <br>
    <input type="submit">
    <br>
    <a href="/logout.php">logout</a>

  <!-- query for add first name and last name -->
    <script
          src="https://code.jquery.com/jquery-3.4.1.min.js"
          integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
          crossorigin="anonymous">
      </script>
    <script>

    $(document).ready(()=>{
    document.getElementById('lname').value="";
    });
     $('input').keyup(function(){
          document.getElementById('fullName').value=$('#fname').val()+" "+$('#lname').val();


       });


       </script>
  </body>
</html>
