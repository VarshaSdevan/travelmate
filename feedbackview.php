
<!DOCTYPE html>
<html>
<head>
<style>
table,td
{
	border:2px solid red;
	border-collapse:collapse;
	padding:15px;
	margin:5px;
}
</style>
<title></title>
<body>
<table>
	<tr>
		<td>Id</td>
		<td>Name</td>
		<td>Feedback</td>
		<td>Action</td>
		<td>Action</td>
		
		
	</tr>
<?php
$mysql=new mysqli("localhost","root","","travel");
$query=$mysql->query("select * from feedback");
while($row=$query->fetch_assoc())
{	
echo "<tr>
		
		<td>".$row["id"]."</td>
		<td>".$row["name"]."</td>
		<td>".$row["feedback"]."</td>
		<td><a href='edit_feedback.php?id={$row['id']}'>Edit</a></td>
		<td><a href='deletefeedback.php?id={$row['id']}'>Delete</a></td>	
	</tr>";          
}
?>
</table>
</body>
</html>