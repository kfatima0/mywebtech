<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<?php 

session_start();

if (isset($_SESSION['user_name']))
{ require 'logged in dashboard.php';}
else
{
	require 'header.php';
}

 ?>
<center> <img src="ehub.png" alt="ehub logo" width="300" height="300"><center/>
<h1 style="text-align: center; margin: 2% 0;">Welcome to Ehub</h1>  	
<?php require 'footer.php';?>
</body>
</html>