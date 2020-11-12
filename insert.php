<?php
$id=$_POST['id'];
$name=$_POST['name'];
$age=$_POST['age'];
$contact=$_POST['contact'];
$email=$_POST['email'];

$servername="localhost";
$username="root";
$password="";
$database="college3";


$conn=mysqli_connect($servername,$username,$password,$database);

$sql="INSERT INTO student(id,name,age,contact,email) VALUES('$id', '$name', '$age', '$contact', '$email')";

mysqli_query($conn,$sql);

echo "data inserted";

mysqli_close($conn);



?>