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
<body class="bi5">
	<form action="inpackage.php" method="post">
		<fieldset>
			<input type="text" name="name" placeholder="Package Name">
			<select name="type" id="type">
            <option>General Package</option>
            <option>Adventure Package</option>
            <option>Family Package</option>
            <option>Pilgrimage Package</option>
        </select>
			<input type="text" name="cost" placeholder="Cost">
			<input type="text" name="duration" placeholder="duration">
			<input type="text" name="location" placeholder="Location">
			<textarea placeholder="Description" name="description"></textarea>
			<input type="submit" name="submit">
		</fieldset>
	</form>
</body>
</html>