<!DOCTYPE html>
<html>
<head>
	<title>travel</title>
	<link rel="stylesheet" href="css/style.css">
	<style>
	select
	{
		padding:10px;
	margin-top:10px;
	margin-left:50px;
	}
fieldset{
	width:300px;
	height:500px;
	margin-left:550px;
	margin-top:50px;
	background-color:rgba(0,0,0,0.4	);

}
input{
	padding:10px;
	margin-top:10px;
	margin-left:50px;
}  
textarea
{
	padding:10px;
	margin-top:10px;
	margin-left:50px;
} 
	</style>
</head>
<body class="reg">

	<form action="insert.php" method="GET">
		<fieldset class="text-white">
		<h1 style="margin-left:60px;">REGISTER</h1>
		<input type="text" name="name" placeholder="Name" required="">
		<input type="text" name="number" placeholder="Number" required="">
		</br>	
		<select name="gender">
			<option>male</option>
			<option>female</option>

		</select>	
		<!-- <input type="radio" name="gender" id="male" value="male"><label for="male">Male</label>
         <input type="radio" name="gender" id="female" value="female"><label for="female">Female</label></br> -->
        <input type="text" name="age"  placeholder="Age"></br>
        <textarea style="width:100px;" name="address" placeholder="Address"></textarea>
		<input type="email" name="email" placeholder="email" required=" ">
		<input type="password" name="password" placeholder="password" required=" ">
		<input type="submit" name="submit"  class="btn">
		</fieldset>
	</form>
    	

</body>
</html>