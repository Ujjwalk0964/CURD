<?php
$servername="localhost";
$username="root";
$password="";
$database="college3";

$conn=mysqli_connect($servername,$username,$password,$database);
?>
<!DOCTYPE html>
<html>
<head>
	<title>user-data</title>
</head>
<body>
	<form action="edit.php" method="get">
		id:-<input type="text" name="id" value="<?php echo $_GET['id']; ?>">
		name:-<input type="" name="name" value="<?php echo $_GET['name']; ?>">
		age:-<input type="text" name="age" value="<?php echo $_GET['age']; ?>">
		contact:-<input type="text" name="contact" value="<?php echo $_GET['contact']; ?>">
		emai:-<input type="text" name="email" value="<?php echo $_GET['email']; ?>">
		<input type="submit" name="save">
	</form>
</body>
</html>
<?php
if(isset($_GET['save']))
{
	$id=$_GET['id'];
	$name=$_GET['name'];
	$age=$_GET['age'];
	$contact=$_GET['contact'];
	$email=$_GET['email'];

	$sql="UPDATE student SET name='$name', age='$age', contact='$contact', email='$email' WHERE id='$id' ";
	$data=mysqli_query($conn,$sql);

	if($data)
	{
		echo "data inserted";
	}
   else
  {
  	echo "data is not set";

   }
}
else
{
	echo "<h1>update the data</h1>";
}
?>