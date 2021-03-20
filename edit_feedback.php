<html>
<body>
<?php
$mysql=new mysqli("localhost","root","","travel");
$id=$_GET['id'];
$result="select * from feedback where id=$id";
$query=mysqli_query($mysql,$result);
while($row=mysqli_fetch_assoc($query))
{	
    
    ?>
    <form action="edit_fd.php?id=<?php echo $id; ?>" method="GET">
    <table>
    <tr>
    <input name="id" type="hidden" id="id" value="<?php echo $id; ?>">
   <td>Name:</td> <td><input type="text" name="name" value=<?php echo $row['name'];?>> </td>
   </tr>
   <tr>
   <td>Feedback:</td> 
   <td><textarea name="feedback"><?php echo $row['feedback'];?></textarea> </td>
   </tr>
   <tr>
   <td>Phone no:</td> <td><input type="text" name="phoneno" value=<?php echo $row['phoneno'];?>> </td>
   </tr>
  <tr><td></td><td><input type="submit" name="edit" value="Update"></td></tr>

   </form>

<?php
}

?>
