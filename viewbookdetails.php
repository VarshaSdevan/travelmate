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
 <table>
    <thead> 
	 <tr>
        
		
		<th>Package Name</th>
		<th>Name</th>
		<th>Phone no</th>
		<th>No of members</th>
		<th>Email</th>
	</tr>
	</thead>
	<tbody>
	<?php
require('connection.php');
$sql="SELECT * from booking";
if ($res=mysqli_query($link,$sql))
{
	if(mysqli_num_rows($res)>0)
	{
		while($row=mysqli_fetch_array($res))
			{
       echo "<tr>
			   
				<td>".$row['package']."</td>
				<td>".$row['name']."</td>
	            <td>".$row['phoneno']."</td>
	            <td>".$row['members']."</td>
				<td>".$row['email']."</td>
				
            </tr>" ;
		
			}
	}

}
    ?>
    </tbody>
   </table>
   </form>
   </body>
 </html>   