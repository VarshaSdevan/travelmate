<?php
session_start();
include('connection.php');
$username=$_POST['uname'];
$password=$_POST['psw'];
$s=mysqli_query($con,"select * from login where uid='$username' and pass='$password'") or die(mysqli_error($con));
if(mysqli_num_rows($s)>0)
{
	
		$_SESSION["tour_user"]=$user;
	$row=mysqli_fetch_array($s);

		$role=$row['u_type'];
		
		$id=$row['id'];
		$uid=$row['uid'];
		$_SESSION["tour_useruid"]=$uid;
		$_SESSION["tour_userid"]=$id;
		
		
	
	if($role==1)
	{
		header('location:adminindex.php');
	}
	
		else if($role==2)
	{
		header('location:touristindex.php');
	}
	else if($role==3)
	{
		header('location:guideindex.php');
	}
		
	
}
else
{
	?>
     <script type="text/javascript">
                alert("Incorrect Username Or Password");
                window.location="index.php";
            </script>
    
<?php	
}

?>
