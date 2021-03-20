<!DOCTYPE HTML>
<html>
	<head>
		<title>login</title>
		<link rel="stylesheet" href="css/style.css">
		<style>
		input{
			padding:20px;
		}
		fieldset{
			padding:20px;
			margin-left:400px;
			margin-top:100px;
		}
		.margin{
			margin-top:30px;
		}
	   .center{
		   margin-left:60px;
	   }
	   
		</style>
	</head>
	<body class="login">
	
		<form class="center" action="bookinsert.php"  method="POST">
		<fieldset style="width:50px" >
			<legend>Book Now</legend>
				

				<input type="text" name="name" placeholder="Enter your name"></br>
				<select name="package" id="package">
  				<option value="wayanad">wayanad</option>
  				<option value="kuttanad">kuttanad</option>
 				<option value="kovalam">kovalam</option>
  				<option value="wonderla">wonderla</option>
				</select>
				<input type="text" name="phoneno" placeholder="Enter your phone number"></br>
				<input type="text" name="members" placeholder="Enter no of members"></br>
				<input type="email" name="email" placeholder="Enter Email-id"></br>
				<input type="submit" class="margin center" value="Book Now">	</fieldset>
		</form>
	
	</body>
</html>
