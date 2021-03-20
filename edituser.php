<?php
require('connection.php');
$id=$_POST['id'];
$name=$_POST['name'];
    $number=$_POST['number'];
    $age=$_POST['age'];
    $address=$_POST['address'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$res="UPDATE register,login SET name='$name',number='$number',age='$age',address='$address',email='$email',password='$password' where  login.id=register.loginid";
    mysqli_query($link,$res);
    header("Location: updateuser.php");