<?php
session_start();
$link=mysqli_connect("localhost","root","","travel");
if(isset($_POST['submit']))
{

$email=$_POST['email'];
$pass=$_POST['password'];
$flag=0;
$sql="SELECT * from register,login where login.id=register.loginid";
$result=mysqli_query($link,$sql);
    while($row=mysqli_fetch_assoc($result))
    {
        if($row['email']==$email && $row['password']==$pass && $row['usertype']==0 && $row['userstatus']=='1' )
        {
        	$_SESSION["name"]=$row['name'];
            $_SESSION["id"]=$row['id'];
        
            
    //}
   
    
    
    //$res="SELECT * from login";
    //$result=mysqli_query($link,$res);
   // while($row=mysqli_fetch_array($result))
       // {
    
            // if($row['email']==$email && $row['password']==$pass && $row['usertype']=='0'&& $row['userstatus']=='1')
            // {
                echo "Succesfully Login";
                header('Location:adminindex.php');
                $flag=1;
                break;
                
            }
            if($row['email']==$email && $row['password']==$pass && $row['usertype']=='1' && $row['userstatus']==1)
            {
                
                echo "Succesfully Login";
                header('Location:userindex.php');
                $flag=1;
                break;
                
            
            }
            if($row['email']==$email && $row['password']==$pass && $row['usertype']=='1' && $row['userstatus']==0)
            {
                
                echo " waiting for approval";
              header('Location:approval.php');
                $flag=1;
                break;
            }
             if($row['email']==$email && $row['password']==$pass && $row['usertype']=='1' && $row['userstatus']==2)
            {
                header("Location:rejected.php");
                $flag=1;
                break;
                
            
            }
           
           
             
            
        }
         if($flag==0)
            {
                echo "invalid user";
                // header('location:loginform.php');
            
            }
            
        
    
}

    ?>
