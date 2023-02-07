<!-- /**
 * Author:    Rohan
 * Created:   21.10.2022
 * 
 * (c) Copyright by Dword Core.
 **/ -->
<?php
include 'config.php';
$email=$_POST['email'];
$password=$_POST['password'];

if (isset($_POST['submit']))
	$sql="SELECT * from `login`";
	$result=mysqli_query($connectdb,$sql);
	
	while($row=mysqli_fetch_assoc($result))
	{
		if($row['email']!=$email && $row['password']!=$password)
		{
			echo '<script>alert("Invalid Email ID and Password"); document.location = "index.php";</script>';
		}
		else
		{
			header("Location: admin.php");
		}
	}
?>