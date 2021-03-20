
 <?php
require('connection.php');
	$name=$_POST['name'];
	$type=$_POST['type'];
	$cost=$_POST['cost'];
    $duration=$_POST['duration'];
	$location=$_POST['location'];
	$description=$_POST['description'];

$sql="insert into packages(name,type,cost,duration,location,description) values('$name','$type','$cost','$duration','$location','$description')";


if(mysqli_query($link,$sql))
{
	
	 header("Location: adminindex.php");
}
else
{
    echo "database could not able to connect $sql".mysqli_error($link);
}
