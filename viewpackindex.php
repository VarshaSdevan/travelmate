<!DOCTYPE html>
<html>
	<head>
	<style>
	table,th,tr,td{
		border:2px solid;
		border-collapse:collapse;
		margin:300px;
		
		height:100px;
		background-color: white;
		margin-top:200px;
	}


	</style>
<link rel="stylesheet" href="css/style.css">

	</head>
<body class="bi9">
 <table>
 	<h1 style="text-align:center;">View Package</h1>
    <thead> 
	 <tr>
        
		<th>Package no</th>
		<th>Package Name</th>
		<th>Type</th>
		<th>Cost</th>
		<th>Location</th>
		<th>Description</th>
	</tr>
	</thead>
	<tbody>
	<?php
require('connection.php');
$sql="SELECT * from packages";
if ($res=mysqli_query($link,$sql))
{
	if(mysqli_num_rows($res)>0)
	{
		while($row=mysqli_fetch_array($res))
			{
       echo "<tr>
			     <td>".$row['id']."</td>
				<td>".$row['name']."</td>
				<td>".$row['type']."</td>
	            <td>".$row['cost']."</td>
	            <td>".$row['duration']."</td>
				<td>".$row['location']."</td>
				<td>".$row['description']."</td>
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