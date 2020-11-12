<?php
$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername,$username,$password);

$sql="create database college3";

mysqli_query($conn,$sql);

echo "database conected";

mysqli_close($conn);


?>