<!-- task 1 to 6 form -->
<!DOCTYPE html>
<html>
<head>
</head>
<body>
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
