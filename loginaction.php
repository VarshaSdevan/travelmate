<?php 
$link=mysqli_connect("localhost","root","","travel");
$pass=$_POST['password'];
$email=$_POST['email'];
$sql="select email,password,usertype from login";
 $count=0;
 $res=mysqli_query( $link,$sql);
    while($row=mysqli_fetch_array($res))
	{
		if($row['email']==$email && $row['password']==$pass)
		{ 
	        if($row['usertype']==0)
			{
			
	           header('location:adminindex.php');
			}
			else
			{
				header('location:userindex.php');
			}
			   
			   $count=$count+1;
				
			
		}    
		
	if($count==0)
{
	echo "failed";
}	
	}

?>