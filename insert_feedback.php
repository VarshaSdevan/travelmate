<?php
$link=mysqli_connect("localhost","root","","travel");
$name=$_POST['name'];
$feedback=$_POST['feedback'];
$phoneno=$_POST['phoneno'];
$sql="insert into feedback(name,feedback,phoneno)values('$name','$feedback','$phoneno')";
if(mysqli_query($link,$sql))
{
	echo "inserted succesfully";
}
else
{
	echo "error$sql".mysqli_error($link);
}
header('location:feedback.php');
?>