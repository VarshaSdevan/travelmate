
<?php
$mysql=new mysqli("localhost","root","","travel");
$id=$_GET["id"];
$name=$_GET["name"];
$feedback=$_GET["feedback"];
$phoneno=$_GET["phoneno"];
$mysql->query("update feedback set name='$name',feedback='$feedback',phoneno=
'$phoneno' where id=$id");
//header("Location: edit_feedback.php");
?>

