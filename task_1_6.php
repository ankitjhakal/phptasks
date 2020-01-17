<?php
session_start();
// session session
// pagination
if(isset($_GET['q'])){
  $a=$_GET['q'];
  header("location: $a.php");
}
//if session var is not set then redirect it to seventask()
 if(!isset($_SESSION['user1']))
 {
   header('location: seventask.php');
 }
 ?>
<!-- task 1 to 6 form -->
<!DOCTYPE html>
<html>
<head>
<style>
.header li {
  padding: 0;
  float:left;
}
.header  li a {
  outline: none;
  color: #000;
  padding:20px;
    display: inline-block;
    text-decoration: none;
}
body .header a:hover {
  background-color: black;
  color: white;
}


.pagination ul {
padding: 0;
margin: 0;
}
.pagination{
  text-decoration: none;
  margin: 0px auto;
  display: inline-block;
}
.header{
  margin-top: 10px;
  width: 100%;
  height:auto;
  padding: 15px;
  background-color: #1a8cff;
  position: relative;
  bottom: 0px;
  list-style-type:none;
  text-align: center;
}




</style>

</head>
<body>
  <div class="header" >
  <div class="pagination" >
<ul >
  <li><a href="1.php">1task</a></li>
  <li><a href="2.php">2task</a></li>
  <li><a href="3.php">3task</a></li>
  <li><a href="4.php">4task</a></li>
  <li><a href="5.php">5task</a></li>
  <li><a href="6.php">6task</a></li>
</ul>
</div>
</div>
  <form action="optask16.php" method="post" enctype="multipart/form-data">
	<input type="text" id="fname" name="fname" placeholder="Enter your first name"><br><br>
  <input type="text" id="lname" name="lname" placeholder="Enter your Last name"><br>
	<input type="text" id="fullName" name="fullName" value="">
  <br>
  <input type="file" name="image" ><br>
  <i>split words
  <br>
  <textarea name="comment"></textarea><br>
  <i>+91
  <input type="text" name="pno" minlength="10" maxlength="10">
  <br>
  <i>EMAIL
  <br>
  <textarea name="email"></textarea>
  <br>
  <input type="submit">



  </form>
  <br>
<!-- javascript  -->
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
