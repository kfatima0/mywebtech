<!DOCTYPE html>
<html>
<body>
 <?php 

session_start();

if (isset($_SESSION['user_name'])){ require 'logged in dashboard.php';}
else
  header("location:Login.php");
 ?>
<div style="margin-left: 40%; margin-top: 2%;">
<fieldset style="width: 100px">
<legend>PROFILE PICTURE</legend>
<form action="Uploadphoto.php" method="post" enctype="multipart/form-data">
  <img src="Pic.png" alt="Profile Picture">
  <input type="file" name="fileToUpload" id="fileToUpload">
  <hr>
  <input type="submit" value="Upload" name="submit">
</form>
</fieldset>
</div> 
<?php require 'footer.php';?>
</body>
</html>