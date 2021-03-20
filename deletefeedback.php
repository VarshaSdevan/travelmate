
<?php
$mysql=new mysqli("localhost","root","","travel");
$id=$_GET['id'];
$mysql->query("delete from feedback where id=$id");
$query=$mysql->query("select * from feedback");
header('location:feedbackview.php');
?>

