<!DOCTYPE html>
<html>
<head>
<title>php work</title>
<style>
 input,textarea{
 padding:10px;
 margin:10px;
 }
 .btn{

 }
</style>
</head>
<body>
<form action="insert_feedback.php" method="POST">
<fieldset style="width:100px">
<legend>feedback</legend>
<table>

                <tr>
<td><h2>Name:</h2></td>
<td><input type="text" name="name"></td>
</tr>

<tr>
<td><h2>Feedback:</h2></td>
<td><textarea placeholder="write feedback"name="feedback"></textarea>
</tr>
            
<tr>
<td><h2>Phone no:</h2></td>
<td><input type="phoneno" name="phoneno"></td>
</tr>
 <tr>
<td><input type="submit" name="submit" value="Submit" class="btn"></td>
</tr>
</fieldset>
</form>
