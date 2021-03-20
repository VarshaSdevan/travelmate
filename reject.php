<?php
require('connection.php');
$id=$_GET['id'];
$sql=" update login set userstatus='2' where id='$id'";


if(mysqli_query($link,$sql))
{
	
	 header("Location: viewuser.php");
}
else
{
    echo "database could not able to connect $sql".mysqli_error($link);
}
header['location:viewuser.php'];
?>
