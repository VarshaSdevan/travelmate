<?php
$mysql=new mysqli("localhost","root","","travel");
$id=$_GET['id'];
mysqli_query($mysql,"delete from packages where id={$id}");
echo '<script>alert("deleted successfully")</script>'; 
header("Location: viewpackage.php")
?>
