<?php
$servername="localhost";
$username="root";
$password="";
$database="college3";

$conn=mysqli_connect($servername,$username,$password,$database);

$sql="select * from student";
$data=mysqli_query($conn,$sql);
$row=mysqli_num_rows($data);
//echo $row;
// $total=mysqli_fetch_assoc($data);
// echo $total['id']." ".$total['name']." ".$total['age']." ".$total['contact']." ".$total['email'];
if($row != 0)
{
	?>
	<h1>Student Details</h1>
	<table cellpadding="4px" border="2px">
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Age</th>
			<th>Contact</th>
			<th>Email</th>
			<th>Delete</th>
			<th>Edit</th>
		</tr>
		<?php
	while($total=mysqli_fetch_assoc($data))
	{
	  echo "<tr>
	         <td>".$total['id']."</td>
	         <td>".$total['name']."</td>
	         <td>".$total['age']."</td>
	         <td>".$total['contact']."</td>
	         <td>".$total['email']."</td>
	         <td><a href='delet.php? id=$total[id]'>Delet</a></td>
	         <td><a href='edit.php ? id=$total[id] & name=$total[name] & age=$total[age] & contact=$total[contact] & email=$total[email]'>Edit</a></td>
	         </tr>";

	}
}
else
{
	echo "data is not inserted";
}

?>
</table>