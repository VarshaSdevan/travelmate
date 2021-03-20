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
      
		<th>Name</th>
		<th>Phone number</th>
		<th>Gender</th>
		<th>Age</th>
		<th>Address</th>
		<th>Email</th>
		<th>Update</th>
	</tr>
	</thead>
	<tbody>
	<?php
require('connection.php');
$id=$_GET['id'];
$sql="SELECT * from register where id=$id";
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
	            <td>".$row['email']."</td>
				<td><a href='updateuser.php?id=".$row['id']."'>update</a></td>";

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