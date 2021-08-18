<?php
session_start();
 $host = "localhost";
 $user = "root";
$password = "";
$db = "books";
$conn = mysqli_connect($host,$user,$password,$db);

		
		
if(isset($_POST['create']))
{$query="insert into login values('".$_POST['name']."','".$_POST['pwd']."','".$_POST['email']."','".$_POST['gender']."','".$_POST['add']."','".$_POST['dob']."','10000')";
echo $query;
	$result = mysqli_query($conn,$query) or die("error");
	if($result)
		{echo "done";
header('location:login.php');}
	else
	{
		echo "no";
		header('location:login.php');
	}

}
else if(isset($_POST['login']))
{$query="select * from login where username='".$_POST['uname']."' and password='".$_POST['pass']."'";
echo $query;
	$result = mysqli_query($conn,$query) or die("error");
	if (!is_bool($result) && $result->num_rows > 0) {
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
			echo "done";
			$_SESSION['loggeduser']=$_POST['uname'];
		header('location:home.php');
		}		
	}
	else
	{
		header('location:login.php');
	}
	

}

?>