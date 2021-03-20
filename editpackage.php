<!DOCTYPE html>
<html>
<head>
	<title>travel</title>
	<link rel="stylesheet" href="css/style.css">
	<style>
	
fieldset{
	width:300px;
	height:400px;
	margin-left:550px;
	margin-top:180px;
	background-color:rgba(0,0,0,0.4	);

}
input{
	padding:10px;
	margin-top:10px;
	margin-left:50px;
}
select{
	padding:10px;
	margin-top:10px;
	margin-left:50px;
	
}
textarea{
	padding:10px;
	margin-top:10px;
	margin-left:50px;
	
}
	</style>
</head>
<body  class="login">
<?php
require('connection.php');
	$id=$_GET['id'];
	$result="select * from packages where id='$id'";
	$res=mysqli_query($link,$result);
	while($row=mysqli_fetch_assoc($res))
	{
		?>
	<form action="editp.php?id=<?php echo $id;?>" method="post">
	<input name="id" type="hidden" id="id" value="<?php echo $id;?>">
		<fieldset>
			<input type="text" name="name" placeholder="Package Name"  value="<?php echo $row['name'];?>">
			<select name="type" id="type"  value="<?php echo $row['type'];?>">
            <option>General Package</option>
            <option>Adventure Package</option>
            <option>Family Package</option>
            <option>Pilgrimage Package</option>
        </select>
			<input type="text" name="cost" placeholder="Cost"  value="<?php echo $row['cost'];?>">
			<input type="text" name="duration" placeholder="duration"  value="<?php echo $row['duration'];?>">
			<input type="text" name="location" placeholder="Location"  value="<?php echo $row['location'];?>">
			<textarea placeholder="Description" name="description"><?php echo $row['description'];?></textarea>
			<input type="submit" name="submit" value="update">
		</fieldset>
	</form>
	<?php
}
?>

</body>
</html>