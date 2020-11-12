<?php
$id=$_POST['id'];
$pwd=$_POST['pwd'];

if($id=="sardha" && $pwd=="kapoor")
{
	header('location:user-data.php');
}
else
{
	echo "<h1>enter the valid data</h1>"."<br>";
	echo "<a href='log.php'>click here</a>";
}


?>