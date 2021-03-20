<!DOCTYPE html>
<html>
	<head>
	<style>
	table,th,tr,td{
		border:2px solid;
		border-collapse:collapse;
		margin:10px;
	}
	</style>
	</head>
<body>
	<a href="adminindex.php">BACK</a>
 <table>
    <thead> 
	 <tr>
      
		<th>Name</th>
		<th>Phone number</th>
		<th>Gender</th>
		<th>Age</th>
		<th>Address</th>
		<th>Email</th>
		<th colspan="2">Action</th>
	</tr>
	</thead>
	<tbody>
	<?php
require('connection.php');
$sql="SELECT * from register,login where login.id=register.loginid";
if ($res=mysqli_query($link,$sql))
{
	if(mysqli_num_rows($res)>0)
	{
		while($row=mysqli_fetch_array($res))
			{
       echo "<tr>
				<td>".$row['name']."</td>
				<td>".$row['number']."</td>
				<td>".$row['gender']."</td>
	            <td>".$row['age']."</td>
	            <td>".$row['address']."</td>
	            <td>".$row['email']."</td>";

	            if($row['userstatus']==0)
	            {
	            	echo
	            "<td><a href='approve.php?id=$row[id]'>Approve</a></td>
	            <td><a href='reject.php?id=$row[id]'>Reject</a></td>";
	        	}
	        	elseif($row['userstatus']==1)
	            {
	            	echo
	            "<td>Approved</td>
	            <td><a href='reject.php?id=$row[id]'>reject</a></td>";
	        	}
	        	else
	        	{
	        		echo
	            "<td><a href='approve.php?id=$row[id]'>approve</a></td>
	            <td>rejected</td>";

	        	}

	        	?>

	        </tr>
	        <?php
                 
         
		            
			}
	}

}
    ?>
    </tbody>
   </table>
   </form>
   </body>
 </html>   