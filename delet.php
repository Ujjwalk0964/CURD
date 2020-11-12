<?php
$servername="localhost";
$username="root";
$password="";
$database="college3";
$id=$_GET['id'];

$conn=mysqli_connect($servername,$username,$password,$database);

$sql="DELETE FROM student WHERE id=$id";

$data=mysqli_query($conn,$sql);
if($data)
{
	echo "deleted";
}
else
{
	echo "failed";
}