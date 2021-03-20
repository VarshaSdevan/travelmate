<!DOCTYPE html>
<html>
<head>
	<title>KERALA TRAVELMATE</title>
	<link rel="stylesheet" href="css/style.css">
	<style>
		

	</style>
</head>
<body class="bi3">

   <nav class="menubar">
	 
      <ul>
	    <li><h1>KERALA TRAVELMATE       user</h1></li>
	    <li><a href="index.php">Home</a></li>
		<li><a href="aboutus.php">About us</a></li>
	    <li><a href="updateuser.php">Profile</a></li>
		<li><a href="userpackview.php">Packages</a></li>
		<li><a href="feedback.php">Feedback</a>
		<div class="submenu">
		<ul>
			<li> <a href="feedback.php">Add Feedback</a></li>
			<li> <a href="feedbackview.php">View Feedback</a></li>
		
	  </ul> 
	  <li><a href="index.php">Logout</a></li>
	</div>
    </nav> 	  
</body>
</html>
<?php
require('connection.php');
session_start();
$id=$_SESSION["id"];
?>