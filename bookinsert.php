<?php
$link=mysqli_connect("localhost","root","","travel");
$package=$_POST["package"];
$name=$_POST["name"];
$phoneno=$_POST["phoneno"];
$members=$_POST["members"];
$email=$_POST["email"];
$sql="insert into booking(package,name,phoneno,members,email)values('$package','$name','$phoneno','$members','$email')";
if(mysqli_query($link,$sql))
{
	echo "inserted succesfully";
}
else
{
	echo "error$sql".mysqli_error($link);
}
header('location:bookform.php');
?>
