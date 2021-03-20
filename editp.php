<?php
require('connection.php');
	$id=$_POST['id'];
	$name=$_POST['name'];
    $type=$_POST['type'];
    $cost=$_POST['cost'];
    $duration=$_POST['duration'];
	$location=$_POST['location'];
	$description=$_POST['description'];
    $res="UPDATE packages SET name='$name',type='$type',cost='$cost',duration='$duration',location='$location',description='$description' where id='$id'";
    mysqli_query($link,$res);
    header("Location: viewpackage.php");
?>
