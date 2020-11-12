<?php
$servername="localhost";
$username="root";
$password="";
$database="college3";

$conn=mysqli_connect($servername,$username,$password,$database);

$sql="create table student(id int(20), name varchar(10), age varchar(10), contact bigint(15), email varchar(15))";

mysqli_query($conn,$sql);

echo "table created";

mysqli_close($conn);




?>